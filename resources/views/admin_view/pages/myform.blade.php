@extends('layouts.main')

@section('content')
	<div class="page-content"><!--BEGIN TITLE & BREADCRUMB PAGE-->
	    <div class="page-title-breadcrumb">
	        <div class="page-header pull-left">
	            <div class="page-title">Form Components</div>
	        </div>
	        <ol class="breadcrumb page-breadcrumb hidden-xs hidden">
	            <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i
	                    class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
	            <li><a href="#">Forms</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
	            <li class="active">Form Components</li>
	        </ol>
	        <div class="view-code-wrapper pull-right">
	            <div id="setting-view-code" data-on="success" data-off="default" data-on-label="View"
	                 data-text-label="Code" data-off-label="Off" class="make-switch switch-small"><input
	                    type="checkbox" checked="checked" class="switch"/></div>
	        </div>
	    </div>
	    <!--END TITLE & BREADCRUMB PAGE-->
	    <div class="box-content"><!--BEGIN CONTENT-->
	        <div class="content">
	            <div class="demo-form-component">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="note note-success"><strong><i class="fa fa-tags"></i>Note</strong>

	                            <p><strong>Circle style, shadow style:</strong> using by add class<code>.form-control-circle</code>
	                                or <code>.form-control-shadow</code> into input or input group.<br/>Template
	                                has change<code>z-index</code> attribute of some picker widgets to help they
	                                can run in modal.</p></div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="panel">
	                            <div class="panel-heading">
	                                <div class="caption">Basic component</div>
	                            </div>
	                            <div class="panel-body">
	                                <form role="form" class="form-horizontal form-seperated">
	                                    <div class="form-body">
	                                        <div class="form-group viewcode-example">
	                                            <label for="InputText" class="col-md-3 control-label">Default Input Text</label>

	                                            <div class="col-md-6">
	                                                <input type="text" id="InputText" placeholder=".form-control" class="form-control"/>
	                                            </div>
	                                        </div>
	                                        <div class="form-group viewcode-example">
	                                            <label for="InputText" class="col-md-3 control-label">Shadow Input Text</label>

	                                            <div class="col-md-6">
	                                                <input type="text" id="InputText" placeholder=".form-control-shadow" class="form-control form-control-shadow"/>
	                                            </div>
	                                        </div>
	                                        <div class="form-group viewcode-example">
	                                            <label for="InputText" class="col-md-3 control-label">Circle Input Text</label>

	                                            <div class="col-md-6">
	                                                <input type="text" id="InputText" placeholder=".form-control-circle" class="form-control form-control-circle"/>
	                                            </div>
	                                        </div>
	                                        <div class="form-group viewcode-example">
	                                            <label for="InputEmail" class="col-md-3 control-label">Default Input Group</label>

	                                            <div class="col-md-6">
	                                                <div class="input-group">
	                                                    <span class="input-group-addon">
	                                                        <i class="fa fa-phone"></i>
	                                                    </span>
	                                                    <input type="text" placeholder=".input-group" class="form-control"/>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="form-group viewcode-example">
	                                            <label for="InputEmail" class="col-md-3 control-label">Shadow Input Group</label>

	                                            <div class="col-md-6">
	                                                <div class="input-group input-group-shadow">
	                                                    <span class="input-group-addon">
	                                                        <i class="fa fa-phone"></i>
	                                                    </span>
	                                                    <input type="text" placeholder=".input-group-shadow" class="form-control"/>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="form-group viewcode-example">
	                                            <label for="InputEmail" class="col-md-3 control-label">Circle Input Group</label>

	                                            <div class="col-md-6">
	                                                <div class="input-group input-group-circle-left">
	                                                    <span class="input-group-addon">
	                                                        <i class="fa fa-phone"></i>
	                                                    </span>
	                                                    <input type="text" placeholder=".input-group-circle-left" class="form-control"/>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="form-group viewcode-example">
	                                            <label for="InputPassword"  class="col-md-3 control-label">Password</label>

	                                            <div class="col-md-6">
	                                                <div class="input-group input-group-circle-right">
	                                                    <input type="password"  placeholder=".input-group-circle-right" class="form-control"/>
	                                                    <span class="input-group-addon">
	                                                        <i class="fa fa-key"></i>
	                                                    </span>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="form-group viewcode-example">
	                                            <label class="col-md-3 control-label">Left icon</label>

	                                            <div class="col-md-6">
	                                                <div class="input-icon">
	                                                    <i class="fa fa-clock-o"></i>
	                                                    <input type="text" placeholder="Left icon" class="form-control"/>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="form-group viewcode-example">
	                                            <label class="col-md-3 control-label">Right icon</label>

	                                            <div class="col-md-6">
	                                                <div class="input-icon right">
	                                                    <i class="fa fa-bullhorn"></i>
	                                                    <input type="text" placeholder="Right icon"  class="form-control"/>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="form-group viewcode-example">
	                                            <label class="col-md-3 control-label">Disabled</label>

	                                            <div class="col-md-6">
	                                                <input type="text" placeholder="Disabled" disabled="disabled" class="form-control"/>
	                                            </div>
	                                        </div>
	                                        <div class="form-group viewcode-example">
	                                            <label class="col-md-3 control-label">Readonly</label>

	                                            <div class="col-md-6">
	                                                <input type="text" placeholder="Readonly" readonly="readonly" class="form-control"/>
	                                            </div>
	                                        </div>
	                                        <div class="form-group viewcode-example">
	                                            <label for="exampleInputFile1" class="col-md-3 control-label">File input</label>

	                                            <div class="col-md-6">
	                                                <input type="file" style="display: none;"/>

	                                                <div class="input-group">
	                                                    <input type="text" class="form-control"/>

	                                                    <div class="input-group-btn">
	                                                        <a class="btn btn-info btn-browse">Browse</a>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="form-group viewcode-example">
	                                            <label class="col-md-3 control-label">Input With Spinner</label>

	                                            <div class="col-md-6">
	                                                <div class="input-icon right">
	                                                    <i class="fa fa-spinner fa-spin"></i>
	                                                    <input type="text" placeholder="Process something" class="form-control"/>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="form-group viewcode-example">
	                                            <label class="col-md-3 control-label">Dropdown</label>

	                                            <div class="col-md-6">
	                                                <select class="form-control">
	                                                    <option>Option 1</option>
	                                                    <option>Option 2</option>
	                                                    <option>Option 3</option>
	                                                    <option>Option 4</option>
	                                                    <option>Option 5</option>
	                                                </select>
	                                            </div>
	                                        </div>
	                                        <div class="form-group viewcode-example">
	                                            <label for="InputDropdown" class="col-md-3 control-label">Multiple Select</label>

	                                            <div class="col-md-6">
	                                                <select multiple="multiple" class="form-control">
	                                                    <option>Option 1</option>
	                                                    <option>Option 2</option>
	                                                    <option>Option 3</option>
	                                                    <option>Option 4</option>
	                                                    <option>Option 5</option>
	                                                </select>
	                                            </div>
	                                        </div>
	                                        <div class="form-group viewcode-example">
	                                            <label  class="col-md-3 control-label">Textarea</label>

	                                            <div class="col-md-6">
	                                                <textarea rows="4" class="form-control"></textarea>
	                                            </div>
	                                        </div>
	                                        <div id="viewcode-form-components-checkbox"
	                                             class="form-group viewcode-example"><label
	                                                class="col-md-3 control-label">Checkboxes</label>

	                                            <div class="col-md-6">
	                                                <div class="checkbox mtx"><label><input type="checkbox"
	                                                                                        class="form-control-shadow"/>&nbsp;
	                                                    Option 1</label></div>
	                                                <div class="checkbox mtx"><label><input type="checkbox"/>&nbsp;
	                                                    Option 2</label></div>
	                                                <div class="checkbox disabled mtx"><label><input
	                                                        type="checkbox" disabled="disabled"/>&nbsp;
	                                                    Disabled</label></div>
	                                            </div>
	                                        </div>
	                                        <div id="viewcode-form-components-inlinecheckbox"
	                                             class="form-group viewcode-example"><label
	                                                class="col-md-3 control-label">Inline Checkboxes</label>

	                                            <div class="col-md-6"><label class="checkbox-inline pln"><input
	                                                    id="inlineCheckbox1" type="checkbox" value="option1"
	                                                    class="form-control-shadow"/>&nbsp;
	                                                Checkbox 1</label><label class="checkbox-inline"><input
	                                                    id="inlineCheckbox2" type="checkbox" value="option2"/>&nbsp;
	                                                Checkbox 2</label><label class="checkbox-inline"><input
	                                                    id="inlineCheckbox3" type="checkbox" value="option3"
	                                                    disabled="disabled"/>&nbsp;
	                                                Disabled</label></div>
	                                        </div>
	                                        <div id="viewcode-form-components-radio"
	                                             class="form-group viewcode-example"><label
	                                                class="col-md-3 control-label">Radio</label>

	                                            <div class="col-md-6">
	                                                <div class="radio mtx"><label><input id="optionsRadios1"
	                                                                                     type="radio"
	                                                                                     name="optionsRadios"
	                                                                                     value="option1"
	                                                                                     checked="checked"
	                                                                                     class="form-control-shadow"/>&nbsp;
	                                                    Option 1</label></div>
	                                                <div class="radio mtx"><label><input id="optionsRadios2"
	                                                                                     type="radio"
	                                                                                     name="optionsRadios"
	                                                                                     value="option2"/>&nbsp;
	                                                    Option 2</label></div>
	                                                <div class="radio disabled mtx"><label><input
	                                                        id="optionsRadios3" type="radio"
	                                                        name="optionsRadios" value="option3"
	                                                        disabled="disabled"/>&nbsp;
	                                                    Disabled</label></div>
	                                            </div>
	                                        </div>
	                                        <div id="viewcode-form-components-radioinline"
	                                             class="form-group viewcode-example"><label
	                                                class="col-md-3 control-label">Radio Inline</label>

	                                            <div class="col-md-6">
	                                                <div class="radio"><label><input id="optionsRadios4"
	                                                                                 type="radio"
	                                                                                 name="optionsRadiosInline"
	                                                                                 value="option1"
	                                                                                 checked="checked"
	                                                                                 class="form-control-shadow"/>&nbsp;
	                                                    Option 1</label><label><input id="optionsRadios5"
	                                                                                  type="radio"
	                                                                                  name="optionsRadiosInline"
	                                                                                  value="option2"/>&nbsp;
	                                                    Option 2</label><label><input id="optionsRadios6"
	                                                                                  type="radio"
	                                                                                  name="optionsRadiosInline"
	                                                                                  value="option3"
	                                                                                  disabled="disabled"/>&nbsp;
	                                                    Disabled</label></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="panel">
	                            <div class="panel-heading">
	                                <div class="caption">Placehoder & Mask input</div>
	                            </div>
	                            <div class="panel-body">
	                                <div id="viewcode-mask-input" class="viewcode-example clearfix">
	                                    <form role="form" class="form-horizontal form-seperated">
	                                        <div class="form-body">
	                                            <div class="form-group"><label class="col-md-3 control-label">Date</label>

	                                                <div class="col-md-9"><input id="date"
	                                                                             placeholder="__/__/____"
	                                                                             class="form-control"/></div>
	                                            </div>
	                                            <div class="form-group"><label class="col-md-3 control-label">Phone</label>

	                                                <div class="col-md-9"><input id="phone"
	                                                                             placeholder="(123) 456-7890"
	                                                                             class="form-control"/></div>
	                                            </div>
	                                            <div class="form-group"><label class="col-md-3 control-label">Product
	                                                Key</label>

	                                                <div class="col-md-9"><input id="product-key"
	                                                                             placeholder="(ab) 12-345"
	                                                                             class="form-control"/></div>
	                                            </div>
	                                        </div>
	                                    </form>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-6">
	                        <div class="panel">
	                            <div class="panel-heading">
	                                <div class="caption">Input help block</div>
	                            </div>
	                            <div class="panel-body">
	                                <div class="viewcode-example clearfix">
	                                    <form role="form" class="form-horizontal form-separated">
	                                        <div class="form-body">
	                                            <div class="form-group">
	                                                <label class="col-md-3 control-label mtxl">Username</label>
	                                                <div class="col-md-4">
	                                                    <p class="text-success">Help block above</p>
	                                                    <input class="form-control input-small"/>
	                                                </div>
	                                            </div>
	                                            <div class="form-group form-inline">
	                                                <label class="col-md-3 control-label">Password</label>
	                                                <div class="col-md-9">
	                                                    <input style="width:120px !important;display:inline-block;" class="form-control input-small mrs"/>
	                                                    <span class="text-warning mts help-block-right">Help block on the right</span>
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="col-md-3 control-label">Password retype</label>
	                                                <div class="col-md-6">
	                                                    <input class="form-control input-small"/>
	                                                    <p class="text-danger">Help block below</p>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </form>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="panel">
	                            <div class="panel-heading">
	                                <div class="caption">Bootstrap Switch</div>
	                            </div>
	                            <div class="panel-body">
	                                <form role="form" class="form-horizontal form-seperated">
	                                    <div class="form-body">
	                                        <div id="viewcode-bootstrap-switch-color"
	                                             class="form-group viewcode-example"><label
	                                                class="col-md-3 control-label">Colors</label>

	                                            <div class="col-md-9">
	                                                <div data-on="primary" data-off="info" class="make-switch">
	                                                    <input type="checkbox" checked="checked"
	                                                           class="switch"/></div>
	                                                &nbsp;
	                                                <div data-on="info" data-off="success" class="make-switch">
	                                                    <input type="checkbox" checked="checked"
	                                                           class="switch"/></div>
	                                                &nbsp;
	                                                <div data-on="success" data-off="warning"
	                                                     class="make-switch"><input type="checkbox"
	                                                                                checked="checked"
	                                                                                class="switch"/></div>
	                                                &nbsp;
	                                                <div data-on="warning" data-off="danger"
	                                                     class="make-switch"><input type="checkbox"
	                                                                                checked="checked"
	                                                                                class="switch"/></div>
	                                                &nbsp;
	                                                <div data-on="danger" data-off="default"
	                                                     class="make-switch mts"><input type="checkbox"
	                                                                                    checked="checked"
	                                                                                    class="switch"/></div>
	                                                &nbsp;
	                                                <div data-on="default" data-off="primary"
	                                                     class="make-switch mts"><input type="checkbox"
	                                                                                    checked="checked"
	                                                                                    class="switch"/></div>
	                                            </div>
	                                        </div>
	                                        <div id="viewcode-bootstrap-switch-size"
	                                             class="form-group viewcode-example"><label
	                                                class="col-md-3 control-label">Size</label>

	                                            <div class="col-md-9">
	                                                <div class="make-switch switch-large"><input type="checkbox"
	                                                                                             checked="checked"
	                                                                                             class="switch"/>
	                                                </div>
	                                                &nbsp;
	                                                <div class="make-switch"><input type="checkbox"
	                                                                                checked="checked"
	                                                                                class="switch"/></div>
	                                                &nbsp;
	                                                <div class="make-switch switch-small"><input type="checkbox"
	                                                                                             checked="checked"
	                                                                                             class="switch"/>
	                                                </div>
	                                                &nbsp;
	                                                <div class="make-switch switch-mini"><input type="checkbox"
	                                                                                            checked="checked"
	                                                                                            class="switch"/>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div id="viewcode-bootstrap-switch-disabled"
	                                             class="form-group viewcode-example"><label
	                                                class="col-md-3 control-label">Disabled</label>

	                                            <div class="col-md-9">
	                                                <div data-on="primary" class="make-switch"><input
	                                                        type="checkbox" checked="checked"
	                                                        disabled="disabled" class="switch"/></div>
	                                            </div>
	                                        </div>
	                                        <div id="viewcode-bootstrap-switch-text"
	                                             class="form-group viewcode-example"><label
	                                                class="col-md-3 control-label">Text</label>

	                                            <div class="col-md-9">
	                                                <div data-on-label="Open" data-off-label="Close"
	                                                     data-text-label="Door" class="make-switch"><input
	                                                        type="checkbox" checked="checked" class="switch"/>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div id="viewcode-bootstrap-switch-icon"
	                                             class="form-group viewcode-example"><label
	                                                class="col-md-3 control-label">Icons</label>

	                                            <div class="col-md-9">
	                                                <div data-on-label="&lt;i class=&quot;fa fa-microphone&quot;&gt;&lt;/i&gt;"
	                                                     data-off-label="&lt;i class=&quot;fa fa-power-off&quot;&gt;&lt;/i&gt;"
	                                                     class="make-switch"><input type="checkbox"
	                                                                                checked="checked"
	                                                                                class="switch"/></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="panel">
	                            <div class="panel-heading">
	                                <div class="caption">Dynamic Character Count</div>
	                            </div>
	                            <div class="panel-body">
	                                <div id="viewcode-character-count" class="viewcode-example clearfix">
	                                    <form role="form" class="form-horizontal form-seperated">
	                                        <div class="form-body">
	                                            <div class="form-group"><label class="col-md-3 control-label">Default
	                                                Input Field</label>

	                                                <div class="col-md-9"><input id="message1" type="text"
	                                                                             name="message1"
	                                                                             class="form-control"/></div>
	                                            </div>
	                                            <div class="form-group"><label class="col-md-3 control-label">Default
	                                                Textareas</label>

	                                                <div class="col-md-9"><textarea id="message2"
	                                                                                name="message2"
	                                                                                class="form-control"></textarea>
	                                                </div>
	                                            </div>
	                                            <div class="form-group"><label class="col-md-3 control-label">Custom
	                                                Usage</label>

	                                                <div class="col-md-9"><span class="help-block">Another message (limited to 50, warning at 20)</span><textarea
	                                                        id="message3" name="message3" rows="6"
	                                                        class="form-control"></textarea></div>
	                                            </div>
	                                        </div>
	                                    </form>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-6">
	                        <div class="panel">
	                            <div class="panel-heading">
	                                <div class="caption">Input sizing</div>
	                            </div>
	                            <div class="panel-body">
	                                <div class="viewcode-example clearfix">
	                                    <form role="form" class="form-horizontal form-seperated">
	                                        <div class="form-body">
	                                            <div class="form-group">
	                                                <label class="col-md-3 control-label">Large Input</label>
	                                                <div class="col-md-9">
	                                                    <input type="text" placeholder=".input-large" style="width:100% !important" class="form-control input-large"/>
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="col-md-3 control-label">Medium Input</label>
	                                                <div class="col-md-9">
	                                                    <input type="text" placeholder=".input-medium" class="form-control input-medium"/>
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="col-md-3 control-label">Small Input</label>
	                                                <div class="col-md-9">
	                                                    <input type="text" placeholder=".input-small" class="form-control input-small"/>
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="col-md-3 control-label">Extra Small Input</label>
	                                                <div class="col-md-9">
	                                                    <input type="text" placeholder=".input-xsmall" class="form-control input-xsmall"/>
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="col-md-3 control-label">Large Input</label>
	                                                <div class="col-md-9">
	                                                    <input type="text"  placeholder="Large Input" class="input-lg form-control"/>
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="col-md-3 control-label">Medium Input</label>
	                                                <div class="col-md-9">
	                                                    <input type="text" placeholder="Medium Input" class="form-control"/>
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="col-md-3 control-label">Small Input</label>
	                                                <div class="col-md-9">
	                                                    <input type="text" placeholder="Small Input" class="input-sm form-control"/>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </form>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="panel">
	                            <div class="panel-heading">
	                                <div class="caption">Validate States</div>
	                            </div>
	                            <div class="panel-body">
	                                <form role="form"></form>
	                                <div class="row">
	                                    <div class="col-md-6">
	                                        <div class="viewcode-example clearfix">
	                                            <div class="form-group">
	                                                <label for="inputSuccess" class="control-label">Defalt input</label>
	                                                <input id="inputDefault" type="text" class="form-control"/>
	                                            </div>
	                                            <div class="form-group has-success">
	                                                <label for="inputSuccess" class="control-label">Input with success</label>
	                                                <input id="inputSuccess" type="text" class="form-control"/>
	                                            </div>
	                                            <div class="form-group has-warning">
	                                                <label for="inputWarning" class="control-label">Input with warning</label>
	                                                <input id="inputWarning" type="text" class="form-control"/></div>
	                                            <div class="form-group has-error">
	                                                <label for="inputError" class="control-label">Input with error</label>
	                                                <input id="inputError" type="text" class="form-control"/>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="col-md-6">
	                                        <div class="viewcode-example clearfix">
	                                            <div class="form-group">
	                                                <label for="inputSuccess" class="control-label">Default input</label>

	                                                <div class="input-icon right">
	                                                    <i data-hover="tooltip" data-original-title="Email address" data-container="body" class="glyphicon glyphicon-info-sign tooltips"></i>
	                                                    <input type="text" class="form-control"/>
	                                                </div>
	                                            </div>
	                                            <div class="form-group has-success">
	                                                <label for="inputSuccess" class="control-label">Input with success</label>
	                                                <div class="input-icon right">
	                                                    <i data-hover="tooltip" data-original-title="You look OK!" data-container="body" class="glyphicon glyphicon-ok tooltips"></i>
	                                                    <input type="text" class="form-control"/>
	                                                </div>
	                                            </div>
	                                            <div class="form-group has-warning">
	                                                <label for="inputWarning" class="control-label">Input with warning</label>
	                                                <div class="input-icon right">
	                                                    <i data-hover="tooltip"  data-original-title="please provide an email" data-container="body" class="glyphicon glyphicon-warning-sign tooltips"></i>
	                                                    <input type="text" class="form-control"/>
	                                                </div>
	                                            </div>
	                                            <div class="form-group has-error">
	                                                <label for="inputError"  class="control-label">Input  with error</label>
	                                                <div class="input-icon right">
	                                                    <i data-hover="tooltip" data-original-title="please write a valid email" data-container="body" class="glyphicon glyphicon-exclamation-sign tooltips"></i>
	                                                    <input type="text" class="form-control"/>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="panel">
	                            <div class="panel-heading">
	                                <div class="caption">Search Toolbar</div>
	                            </div>
	                            <div class="panel-body">
	                                <h4 class="block-heading">Button Addons</h4>
	                                <div class="row">
	                                    <div class="col-md-6 mbm">
	                                        <div class="viewcode-example clearfix">
	                                            <div class="input-group">
	                                                <span class="input-group-btn">
	                                                    <button type="button" class="btn btn-primary">Go! </button>
	                                                </span>
	                                                <input type="text" class="form-control"/>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="col-md-6 mbm">
	                                        <div class="viewcode-example clearfix">
	                                            <div class="input-group">
	                                                <input type="text" class="form-control"/>
	                                                <span class="input-group-btn">
	                                                    <button type="button" class="btn btn-primary"> Go! </button>
	                                                </span>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="clearfix mbxxl"></div>
	                                <h4 class="block-heading">Button Addons On Both Sides</h4>
	                                <div class="row">
	                                    <div class="col-md-12 mbm">
	                                        <div class="viewcode-example clearfix">
	                                            <div class="input-group">
	                                                <span class="input-group-btn">
	                                                    <button type="button" class="btn btn-success">Go!</button>
	                                                </span>
	                                                <input type="text" class="form-control"/>
	                                                <span class="input-group-btn">
	                                                    <button type="button" class="btn btn-success"> Go! </button>
	                                                </span>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="clearfix mbxxl"></div>
	                                <h4 class="block-heading">Buttons With Dropdowns</h4>

	                                <div class="row">
	                                    <div class="col-md-6 mbm">
	                                        <div class="viewcode-example clearfix">
	                                            <div class="input-group">
	                                                <div class="input-group-btn">
	                                                    <button type="button" data-toggle="dropdown"  class="btn btn-info dropdown-toggle">
	                                                        Action
	                                                        <i class="fa fa-angle-down"></i>
	                                                    </button>
	                                                    <ul class="dropdown-menu">
	                                                        <li><a href="#">Action</a></li>
	                                                        <li><a href="#">Another action</a></li>
	                                                        <li><a href="#">Something else here</a></li>
	                                                        <li class="divider"></li>
	                                                        <li><a href="#">seperated link</a></li>
	                                                    </ul>
	                                                </div>
	                                                <input type="text" class="form-control"/>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="col-md-6 mbm">
	                                        <div class="viewcode-example clearfix">
	                                            <div class="input-group">
	                                                <input type="text" class="form-control"/>
	                                                <div class="input-group-btn">
	                                                    <button type="button" data-toggle="dropdown" class="btn btn-info dropdown-toggle">
	                                                        Action
	                                                        <i class="fa fa-angle-down"></i>
	                                                    </button>
	                                                    <ul class="dropdown-menu pull-right">
	                                                        <li><a href="#">Action</a></li>
	                                                        <li><a href="#">Another action</a></li>
	                                                        <li><a href="#">Something else here</a></li>
	                                                        <li class="divider"></li>
	                                                        <li><a href="#">seperated link</a></li>
	                                                    </ul>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="clearfix mbxxl"></div>
	                                <h4 class="block-heading">Buttons With Dropdowns On Both Sides</h4>
	                                <div class="row">
	                                    <div class="col-md-12 mbm">
	                                        <div class="viewcode-example clearfix">
	                                            <div class="input-group">
	                                                <div class="input-group-btn">
	                                                    <button type="button" data-toggle="dropdown" class="btn btn-danger dropdown-toggle">
	                                                        Action
	                                                        <i class="fa fa-angle-down"></i>
	                                                    </button>
	                                                    <ul class="dropdown-menu">
	                                                        <li><a href="#">Action</a></li>
	                                                        <li><a href="#">Another action</a></li>
	                                                        <li><a href="#">Something else here</a></li>
	                                                        <li class="divider"></li>
	                                                        <li><a href="#">seperated link</a></li>
	                                                    </ul>
	                                                </div>
	                                                <input type="text" class="form-control"/>
	                                                <div class="input-group-btn">
	                                                    <button type="button" data-toggle="dropdown" class="btn btn-danger dropdown-toggle">
	                                                        Action
	                                                        <i class="fa fa-angle-down"></i>
	                                                    </button>
	                                                    <ul class="dropdown-menu pull-right">
	                                                        <li><a href="#">Action</a></li>
	                                                        <li><a href="#">Another action</a></li>
	                                                        <li><a href="#">Something else here</a></li>
	                                                        <li class="divider"></li>
	                                                        <li><a href="#">seperated link</a></li>
	                                                    </ul>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="clearfix mbxxl"></div>
	                                <h4 class="block-heading">Segmented Buttons</h4>

	                                <div class="row">
	                                    <div class="col-md-6 mbm">
	                                        <div class="viewcode-example clearfix">
	                                            <div class="input-group">
	                                                <div class="input-group-btn">
	                                                    <button type="button" tabindex="-1" class="btn btn-primary"> Action </button>
	                                                    <button type="button" data-toggle="dropdown" tabindex="-1" class="btn btn-primary dropdown-toggle">
	                                                        <i class="fa fa-angle-down"></i>
	                                                    </button>
	                                                    <ul role="menu" class="dropdown-menu">
	                                                        <li><a href="#">Action</a></li>
	                                                        <li><a href="#">Another action</a></li>
	                                                        <li><a href="#">Something else here</a></li>
	                                                        <li class="divider"></li>
	                                                        <li><a href="#">seperated link</a></li>
	                                                    </ul>
	                                                </div>
	                                                <input type="text" class="form-control"/>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="col-md-6 mbm">
	                                        <div class="viewcode-example clearfix">
	                                            <div class="input-group">
	                                                <input type="text" class="form-control"/>
	                                                <div class="input-group-btn">
	                                                    <button type="button" tabindex="-1" class="btn btn-primary">Action</button>
	                                                    <button type="button" data-toggle="dropdown" tabindex="-1" class="btn btn-primary dropdown-toggle">
	                                                        <i class="fa fa-angle-down"></i>
	                                                    </button>
	                                                    <ul role="menu" class="dropdown-menu pull-right">
	                                                        <li><a href="#">Action</a></li>
	                                                        <li><a href="#">Another action</a></li>
	                                                        <li><a href="#">Something else here</a></li>
	                                                        <li class="divider"></li>
	                                                        <li><a href="#">seperated link</a></li>
	                                                    </ul>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!--END CONTENT--></div>
	</div>
@endsection