@section('head')
@parent
  <link rel="stylesheet" href="<?php css('backend/uniform.css') ?>" />
  <link rel="stylesheet" href="<?php css('backend/select2.css') ?>" />
  <link rel="stylesheet" href="<?php css('backend/colorpicker.css') ?>" />
  <link rel="stylesheet" href="<?php css('backend/datepicker.css') ?>" />
  <link rel="stylesheet" href="<?php css('backend/bootstrap-wysihtml5.css') ?>" />
@endsection

@section('bottom')
@parent
  <script src="<?php js('backend/jquery.uniform.js') ?>"></script>
  <script src="<?php js('backend/select2.min.js') ?>"></script>
  <script src="<?php js('backend/bootstrap-colorpicker.js') ?>"></script>
  <script src="<?php js('backend/bootstrap-datepicker.js') ?>"></script>
  <script src="<?php js('backend/jquery.toggle.buttons.js') ?>"></script>
  <script src="<?php js('backend/masked.js') ?>"></script>
  <script src="<?php js('backend/matrix.form_common.js') ?>"></script>
  <script src="<?php js('backend/wysihtml5-0.3.0.js') ?>"></script>
  <script src="<?php js('backend/jquery.peity.min.js') ?>"></script>
  <script src="<?php js('backend/bootstrap-wysihtml5.js') ?>"></script>
  <script>
    $('.textarea_editor').wysihtml5();
  </script>
@endsection

@extends('backend.layout.main')
@section('content')
<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Form elements</a> <a href="#" class="current">Common elements</a> </div>
  <h1>Common Form Elements</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Personal-info</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="#" method="get" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">First Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="First name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Last Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Last name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Password input</label>
              <div class="controls">
                <input type="password"  class="span11" placeholder="Enter Password"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Company info :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Company name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Description field:</label>
              <div class="controls">
                <input type="text" class="span11" />
                <span class="help-block">Description field</span> </div>
            </div>
            <div class="control-group">
              <label class="control-label">Message</label>
              <div class="controls">
                <textarea class="span11" ></textarea>
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Elements</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="#" method="get" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Select input</label>
              <div class="controls">
                <select >
                  <option>First option</option>
                  <option>Second option</option>
                  <option>Third option</option>
                  <option>Fourth option</option>
                  <option>Fifth option</option>
                  <option>Sixth option</option>
                  <option>Seventh option</option>
                  <option>Eighth option</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Multiple Select input</label>
              <div class="controls">
                <select multiple >
                  <option>First option</option>
                  <option selected>Second option</option>
                  <option>Third option</option>
                  <option>Fourth option</option>
                  <option>Fifth option</option>
                  <option>Sixth option</option>
                  <option>Seventh option</option>
                  <option>Eighth option</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Radio inputs</label>
              <div class="controls">
                <label>
                  <input type="radio" name="radios" />
                  First One</label>
                <label>
                  <input type="radio" name="radios" />
                  Second One</label>
                <label>
                  <input type="radio" name="radios" />
                  Third One</label>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Checkboxes</label>
              <div class="controls">
                <label>
                  <input type="checkbox" name="radios" />
                  First One</label>
                <label>
                  <input type="checkbox" name="radios" />
                  Second One</label>
                <label>
                  <input type="checkbox" name="radios" />
                  Third One</label>
              </div>
            </div>
            <div class="control-group">
              <label for="checkboxes" class="control-label">Data Toggle checkbox</label>
              <div class="controls">
                <div data-toggle="buttons-checkbox" class="btn-group">
                  <button class="btn btn-primary" type="button">Left</button>
                  <button class="btn btn-primary" type="button">Middle</button>
                  <button class="btn btn-primary" type="button">Right</button>
                </div>
              </div>
            </div>
            <div class="control-group">
              <label for="checkboxes" class="control-label">Data Radio button</label>
              <div class="controls">
                <div data-toggle="buttons-radio" class="btn-group">
                  <button class="btn btn-primary" type="button">Left</button>
                  <button class="btn btn-primary" type="button">Middle</button>
                  <button class="btn btn-primary" type="button">Right</button>
                </div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">File upload input</label>
              <div class="controls">
                <input type="file" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Disabled Input</label>
              <div class="controls">
                <input type="text" placeholder="You can't type anything…" disabled="" class="span11">
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Elements</h5>
        </div>
        <div class="widget-content nopadding">
          <form class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Color picker (hex)</label>
              <div class="controls">
                <input type="text" data-color="#ffffff" value="#ffffff" class="colorpicker input-big span11">
                <span class="help-block">Color picker with Formate of  (hex)</span> </div>
            </div>
            <div class="control-group">
              <label class="control-label">Color picker (rgba)</label>
              <div class="controls">
                <input type="text" data-color="rgba(344,232,53,0.5)" value="rgba(344,232,53,0.5)" data-color-format="rgba" class="colorpicker span11">
                <span class="help-block">Color picker with Formate of  (rgba)</span> </div>
            </div>
            <div class="control-group">
              <label class="control-label">Date picker (dd-mm)</label>
              <div class="controls">
                <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span11">
                <span class="help-block">Date with Formate of  (dd-mm-yy)</span> </div>
            </div>
            <div class="control-group">
              <label class="control-label">Date Picker (mm-dd)</label>
              <div class="controls">
                <div  data-date="12-02-2012" class="input-append date datepicker">
                  <input type="text" value="12-02-2012"  data-date-format="mm-dd-yyyy" class="span11" >
                  <span class="add-on"><i class="icon-th"></i></span> </div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Color Picker (rgb)</label>
              <div class="controls">
                <div data-color-format="rgb" data-color="rgb(155, 142, 180)" class="input-append color colorpicker colorpicker-rgb">
                  <input type="text" value="rgb(155, 142, 180)" class="span11">
                  <span class="add-on"><i style="background-color: rgb(155, 142, 180)"></i></span> </div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Color Picker (hex)</label>
              <div class="controls">
                <div data-color-format="hex" data-color="#000000"  class="input-append color colorpicker">
                  <input type="text" value="#000000" class="span11">
                  <span class="add-on"><i style="background-color: #000000"></i></span> </div>
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
              <button type="submit" class="btn btn-primary">Reset</button>
              <button type="submit" class="btn btn-info">Edit</button>
              <button type="submit" class="btn btn-danger">Cancel</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Elements</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="#" class="form-horizontal">
            <div class="control-group">
              <label for="normal" class="control-label">Phone field</label>
              <div class="controls">
                <input type="text" id="mask-phone" class="span8 mask text">
                <span class="help-block blue span8">(999) 999-9999</span> </div>
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">Phone field + ext.</label>
              <div class="controls">
                <input type="text" id="mask-phoneExt" class="span8 mask text">
                <span class="help-block blue span8">(999) 999-9999? x99999</span> </div>
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">Phone field + ext.</label>
              <div class="controls">
                <input type="text" id="mask-phoneInt" class="span8 mask text">
                <span class="help-block blue span8">+40 999 999 999</span> </div>
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">Date field</label>
              <div class="controls">
                <input type="text" id="mask-date" class="span8 mask text">
                <span class="help-block blue span8">99/99/9999</span> </div>
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">SSN field</label>
              <div class="controls">
                <input type="text" id="mask-ssn" class="span8 mask text">
                <span class="help-block blue span8">999-99-9999</span> </div>
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">Product Key</label>
              <div class="controls">
                <input type="text" id="mask-productKey" class="span8 mask text">
                <span class="help-block blue span8">a*-999-a999</span> </div>
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">Eye Script</label>
              <div class="controls">
                <input type="text" id="mask-eyeScript" class="span8 mask text">
                <span class="help-block blue span8">~9.99 ~9.99 999</span> </div>
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">Percent</label>
              <div class="controls">
                <input type="text" id="mask-percent" class="span8 mask text">
                <span class="help-block blue span8">99%</span> </div>
            </div>
          </form>
        </div>
      </div>
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Elements</h5>
        </div>
        <div class="widget-content nopadding">
          <form class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Tooltip Input</label>
              <div class="controls">
                <input type="text" placeholder="Hover for tooltip…" data-title="A tooltip for the input" class="span11 tip" data-original-title="">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Type ahead Input</label>
              <div class="controls">
                <input type="text" placeholder="Type here for auto complete…" style="margin: 0 auto;" data-provide="typeahead" data-items="4" data-source="[&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Ahmedabad&quot;,&quot;India&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;]" class="span11">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Prepended Input</label>
              <div class="controls">
                <div class="input-prepend"> <span class="add-on">#</span>
                  <input type="text" placeholder="prepend" class="span11">
                </div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Appended Input</label>
              <div class="controls">
                <div class="input-append">
                  <input type="text" placeholder="5.000" class="span11">
                  <span class="add-on">$</span> </div>
              </div>
            </div>
            <div class="control-group warning">
              <label class="control-label" for="inputWarning">Input with warning</label>
              <div class="controls">
                <input type="text" id="inputWarning" class="span11">
                <span class="help-inline">Something may have gone wrong</span> </div>
            </div>
            <div class="control-group error">
              <label class="control-label" for="inputError">Input with error</label>
              <div class="controls">
                <input type="text" id="inputError" class="span11">
                <span class="help-inline">Please correct the error</span> </div>
            </div>
            <div class="control-group info">
              <label class="control-label" for="inputInfo">Input with info</label>
              <div class="controls">
                <input type="text" id="inputInfo" class="span11">
                <span class="help-inline">Username is already taken</span> </div>
            </div>
            <div class="control-group success">
              <label class="control-label" for="inputSuccess">Input with success</label>
              <div class="controls">
                <input type="text" id="inputSuccess" class="span11">
                <span class="help-inline">Woohoo!</span> </div>
            </div>
          </form>
        </div>
      </div>
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Layout</h5>
        </div>
        <div class="widget-content">
          <div class="controls">
            <input type="text" placeholder=".span12" class="span12 m-wrap">
          </div>
          <div class="controls controls-row">
            <input type="text" placeholder=".span11" class="span11 m-wrap">
            <input type="text" placeholder=".span1" class="span1 m-wrap">
          </div>
          <div class="controls controls-row">
            <input type="text" placeholder=".span10" class="span10 m-wrap">
            <input type="text" placeholder=".span2" class="span2 m-wrap">
          </div>
          <div class="controls controls-row">
            <input type="text" placeholder=".span9" class="span9 m-wrap">
            <input type="text" placeholder=".span3" class="span3 m-wrap">
          </div>
          <div class="controls controls-row">
            <input type="text" placeholder=".span8" class="span8 m-wrap">
            <input type="text" placeholder=".span4" class="span4 m-wrap">
          </div>
          <div class="controls controls-row">
            <input type="text" placeholder=".span7" class="span7 m-wrap">
            <input type="text" placeholder=".span5" class="span5 m-wrap">
          </div>
          <div class="controls controls-row">
            <input type="text" placeholder=".span6" class="span6 m-wrap">
            <input type="text" placeholder=".span6" class="span6 m-wrap">
          </div>
          <div class="controls controls-row">
            <input type="text" placeholder=".span5" class="span5 m-wrap">
            <input type="text" placeholder=".span7" class="span7 m-wrap">
          </div>

          <div class="controls controls-row">
            <input type="text" placeholder=".span2" class="span2 m-wrap">
            <input type="text" placeholder=".span3" class="span3 m-wrap">
            <input type="text" placeholder=".span4" class="span4 m-wrap">
            <input type="text" placeholder=".span1" class="span2 m-wrap">
            <input type="text" placeholder=".span1" class="span1 m-wrap">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>wysihtml5</h5>
      </div>
      <div class="widget-content">
        <div class="control-group">
          <form>
            <div class="controls">
              <textarea class="textarea_editor span12" rows="6" placeholder="Enter text ..."></textarea>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div></div>
@endsection