<?php 
 return [ 
  'inputContainer'    => '<div class="form-group">{{content}}</div>', 
  'input'             => '<input class="{{class}} form-control {{addonClass}}" type="{{type}}" name="{{name}}"{{attrs}}/><span class="help-block"> {{help}}</span><div class="invalid-feedback">{{invalid}}</div>', 
  'button'            => '<button class="{{class}} btn btn-primary {{addonClass}}" {{attrs}}>{{text}}</button>', 
  'textarea'          => '<textarea class="form-control {{addonClass}}" type="{{type}}" name="{{name}}" {{attrs}}>{{value}}</textarea><span class="help"> {{help}}</span>', 
  'select'            => '<select class="form-control {{addonClass}}" name="{{name}}"{{attrs}}>{{content}}</select>', 
  'selectMultiple'    => '<select class="form-control {{addonClass}}" multiple="multiple" name="{{name}}"{{attrs}}>{{content}}</select>', 
  'error'             => '<span class="help-block">{{content}}</span>', 
  //'file'              => '<input type="file" name="{{name}}"{{attrs}} class="{{class}} form-control {{addonClass}}">', 
  'nestingLabel'      => '{{hidden}}{{input}}<label{{attrs}} class="custom-control-label">{{text}}</label>', 
  'checkbox'          => '<input class="custom-control-input {{addonClass}}" type="checkbox" name="{{name}}" value="{{value}}" {{attrs}}/>', 
  'checkboxFormGroup' => '<div class="custom-control custom-checkbox {{addonClass}}">{{label}}</div>', 
  'radio'             => '<input class="custom-control-input {{addonClass}}" type="radio" name="{{name}}" value="{{value}}" {{attrs}}/>', 
  'radioWrapper'      => '<div class="custom-control custom-radio {{addonClass}}">{{label}}</div>', 
  'file'        => '<div class="custom-file"><input type="file" name="{{name}}" class="custom-file-input" {{attrs}}><label{{attrs}} class="custom-file-label">Choose file</label></div>', 
 'submitContainer' => '{{content}}', 
 ]; 
?>