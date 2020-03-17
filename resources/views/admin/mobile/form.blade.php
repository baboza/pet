


<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'ชื่อสัตว์เลี้ยง' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($post->title) ? $post->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('cus_name') ? 'has-error' : ''}}">
    <label for="cus_name" class="control-label">{{ 'ชื่อเจ้าของสัตว์เลี้ยง' }}</label>
    <input class="form-control" name="cus_name" type="text" id="cus_name" value="{{ isset($post->cus_name) ? $post->cus_name : ''}}" >
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'เลขประจำตัวประชาชาชน' }}</label>
    <input class="form-control" name="user_id" type="text" id="user_id" value="{{ isset($post->user_id) ? $post->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('opd_phone') ? 'has-error' : ''}}">
    <label for="opd_phone" class="control-label">{{ 'เบอร์โทรศัพท์' }}</label>
    <input class="form-control" name="opd_phone" type="text" id="opd_phone" value="{{ isset($post->opd_phone) ? $post->opd_phone : ''}}" >
    {!! $errors->first('opd_phone', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('line_id') ? 'has-error' : ''}}">
    <label for="line_id" class="control-label">{{ 'Line Id' }}</label>
    <input class="form-control" name="line_id" type="text" id="line_id" value="{{ isset($post->line_id) ? $post->line_id : ''}}" >
    {!! $errors->first('line_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
    <label for="category" class="control-label">{{ 'ประเภท' }}</label>
    <select name="category" class="form-control" id="category" >
    @foreach (json_decode('{"สุนัข": "สุนัข", "แมว": "แมว", "อื่นๆ": "อื่นๆ"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($post->category) && $post->category == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('color') ? 'has-error' : ''}}">
    <label for="color" class="control-label">{{ 'สี/ตำหนิ' }}</label>
    <input class="form-control" name="color" type="text" id="color" value="{{ isset($post->color) ? $post->color : ''}}" >
    {!! $errors->first('color', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('sex') ? 'has-error' : ''}}">
    <label for="sex" class="control-label">{{ 'เพศ' }}</label>
    <select name="sex" class="form-control" id="sex" >
    @foreach (json_decode('{"ผู้": "ผู้", "เมีย": "เมีย"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($post->sex) && $post->sex == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('sex', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('breed') ? 'has-error' : ''}}">
    <label for="breed" class="control-label">{{ 'พันธุ์' }}</label>
    <input class="form-control" name="breed" type="text" id="breed" value="{{ isset($post->breed) ? $post->breed : ''}}" >
    {!! $errors->first('breed', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('year') ? 'has-error' : ''}}">
    <label for="year" class="control-label">{{ 'อายุ' }}</label>
    <input class="form-control" name="year" type="text" id="year" value="{{ isset($post->year) ? $post->year : ''}}" >
    {!! $errors->first('year', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('Sterilization') ? 'has-error' : ''}}">
    <label for="Sterilization" class="control-label">{{ 'สถานะการทำหมัน' }}</label>
    <select name="Sterilization" class="form-control" id="Sterilization" >
    @foreach (json_decode('{"ยังไม่ทำหมัน": "ยังไม่ทำหมัน", "ทำหมันแล้ว": "ทำหมันแล้ว"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($post->Sterilization) && $post->Sterilization == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('Sterilization', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

