<div class="form-group">
  {!! Form::Label('first-name', 'First Name', ['class' => 'col-sm-3 control-label']) !!}
  <div class="col-sm-6">
    {!! Form::text('first_name', "", ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::Label('last-name', 'Last Name', ['class' => 'col-sm-3 control-label']) !!}
  <div class="col-sm-6">
    {!! Form::text('last_name', "", ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::Label('address', 'Address', ['class' => 'col-sm-3 control-label']) !!}
  <div class="col-sm-6">
    {!! Form::text('address', "", ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::Label('zip', 'Zip Code', ['class' => 'col-sm-3 control-label']) !!}
  <div class="col-sm-6">
    {!! Form::text('zip', "", ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::Label('city', 'City', ['class' => 'col-sm-3 control-label']) !!}
  <div class="col-sm-6">
    {!! Form::text('city', "", ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::Label('state-id', 'State', ['class' => 'col-sm-3 control-label']) !!}
  <div class="col-sm-6">
    {!! Form::select('state_id', $states, null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::Label('phone-number', 'Phone Number', ['class' => 'col-sm-3 control-label']) !!}
  <div class="col-sm-6">
    {!! Form::text('phone_number', "", ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::Label('mobile-number', 'Mobile Number', ['class' => 'col-sm-3 control-label']) !!}
  <div class="col-sm-6">
    {!! Form::text('mobile_number', "", ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::Label('email', 'Email', ['class' => 'col-sm-3 control-label']) !!}
  <div class="col-sm-6">
    {!! Form::text('email', "", ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::Label('year-level', 'Year Level', ['class' => 'col-sm-3 control-label']) !!}
  <div class="col-sm-6">
    {!! Form::text('year_level', "", ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::Label('section-id', 'Section', ['class' => 'col-sm-3 control-label']) !!}
  <div class="col-sm-6">
    {!! Form::select('section_id', $sections, null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-sm-offset-3 col-sm-6">
    <button type="submit" class="btn btn-default">
      <i class="fa fa-btn fa-plus"></i>Add Student
    </button>
  </div>
</div>
