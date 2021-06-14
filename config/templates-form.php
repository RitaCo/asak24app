<?php
return [
    // Used for button elements in button().
    'button' => '<button class="btn btn-primary btn-sm" {{attrs}}>{{text}}</button>',
    // Used for checkboxes in checkbox() and multiCheckbox().
    'checkbox' => '<input class="checkbox" type="checkbox" name="{{name}}" value="{{value}}"{{attrs}}>',
    // Input group wrapper for checkboxes created via control().
    'checkboxFormGroup' => '{{label}}',
    // Wrapper container for checkboxes.
    'checkboxWrapper' => '<div class="checkbox">1{{label}}</div>',
    // Error message wrapper elements.
    'error' => '<div class="error-message">{{content}}</div>',
    // Container for error items.
    'errorList' => '<ul>{{content}}</ul>',
    // Error item wrapper.
    'errorItem' => '<li>{{text}}</li>',
    // File input used by file().
    'file' => '<input type="file" name="{{name}}"{{attrs}}>',
    // Fieldset element used by allControls().
    'fieldset' => '<fieldset{{attrs}}>{{content}}</fieldset>',
    // Open tag used by create().
    'formStart' => '<form{{attrs}}>',
    // Close tag used by end().
    'formEnd' => '</form>',
    // General grouping container for control(). Defines input/label ordering.
    'formGroup' => '{{label}}{{input}}',
    // Wrapper content used to hide other content.
    'hiddenBlock' => '<div style="display:none;">{{content}}</div>',
    // Generic input element.
    'input' => '<input class="input input-bordered" type="{{type}}" name="{{name}}"{{attrs}}/>',
    // Submit input element.
    'inputSubmit' => '<input type="{{type}}"{{attrs}}/>',
    // Container element used by control().
    'inputContainer' => '<div class="form-control fc-{{type}}{{required}}">{{content}}</div>',
    // Container element used by control() when a field has an error.
    'inputContainerError' => '<div class="input {{type}}{{required}} error">{{content}}{{error}}</div>',
    // Label element when inputs are not nested inside the label.
    'label' => '<label class="label" {{attrs}}> <span class="label-text">{{text}}</span></label>',
    // Label element used for radio and multi-checkbox inputs.
    'nestingLabel' => '{{hidden}}<label class="cursor-pointer flex self-stretch items-center my-2 px-1" {{attrs}}> <span class="flex-shrink-0 w-32 label-text">{{text}}</span><div class="flex ">{{input}}<span class="checkbox-mark"></span> </div></label>',
    // Legends created by allControls()
    'legend' => '<legend>{{text}}</legend>',
    // Multi-Checkbox input set title element.
    'multicheckboxTitle' => '<legend>{{text}}</legend>',
    // Multi-Checkbox wrapping container.
    'multicheckboxWrapper' => '<fieldset{{attrs}}>{{content}}</fieldset>',
    // Option element used in select pickers.
    'option' => '<option value="{{value}}"{{attrs}}>{{text}}</option>',
    // Option group element used in select pickers.
    'optgroup' => '<optgroup label="{{label}}"{{attrs}}>{{content}}</optgroup>',
    // Select element,
    'select' => '<select class="select select-bordered w-full max-w-xs" name="{{name}}"{{attrs}}>{{content}}</select>',
    // Multi-select element,
    'selectMultiple' => '<select name="{{name}}[]" multiple="multiple"{{attrs}}>{{content}}</select>',
    // Radio input element,
    'radio' => '<input class="radio" type="radio" name="{{name}}" value="{{value}}"{{attrs}}>',
    // Wrapping container for radio input/label,
    'radioWrapper' => '{{label}}',
    // Textarea input element,
    'textarea' => '<textarea class=" textarea  textarea-bordered h-48 min-h-full"  name="{{name}}"{{attrs}}>{{value}}</textarea>',
    // Container for submit buttons.
    'submitContainer' => '<div class="submit">{{content}}</div>',
    // Confirm javascript template for postLink()
    'confirmJs' => '{{confirm}}',
    // selected class
    'selectedClass' => 'selected',
];
