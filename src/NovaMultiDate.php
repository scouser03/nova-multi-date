<?php

namespace Scouser03\NovaMultiDate;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Http\Requests\NovaRequest;

class NovaMultiDate extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-multi-date';

}
