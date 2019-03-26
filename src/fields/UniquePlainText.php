<?php
/**
 * Unique Field plugin for Craft CMS 3.x
 *
 * Plain text field that only accepts data that is not already in the same field in another entry.
 *
 * @link      http://sebj.co.uk
 * @copyright Copyright (c) 2019 Seb Jones
 */

namespace enovate\uniquefield\fields;

use enovate\uniquefield\EnovateUniqueField;

use Craft;
use craft\elements\Entry;
use craft\fields\PlainText;
use craft\helpers\Db;
use craft\helpers\Json;
use yii\db\Schema;

/**
 * UniqueField Field
 *
 * Whenever someone creates a new field in Craft, they must specify what
 * type of field it is. The system comes with a handful of field types baked in,
 * and we’ve made it extremely easy for plugins to add new ones.
 *
 * https://craftcms.com/docs/plugins/field-types
 *
 * @author    Seb Jones
 * @package   UniqueField
 * @since     0.1
 */
class UniquePlainText extends PlainText
{
    public static function displayName():string
    {
        return Craft::t('app', 'Unique Plain Text');
    }

    public function getElementValidationRules(): array
    {
        return [[
            $this->handle, function ($attribute, $params) {
                if (Entry::find()->{$this->handle}($attribute->{$this->handle})->one()) {
                    $attribute->addError($this->handle, "This must be unique.");
                }
            }
        ]];
    }
}
