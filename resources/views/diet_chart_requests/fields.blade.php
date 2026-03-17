<!-- Member Field -->

@php
$members = DB::table('members')
    ->join('multi_branchs', 'members.branch_id', '=', 'multi_branchs.id')
    ->select('members.id', 'members.mem_name', 'multi_branchs.branch_name')
    ->when(true, function($query) {
        if (if_can('male-access')) {
            $query->where('members.branch_id', 1); // Male branch
        } elseif (if_can('female-access')) {
            $query->where('members.branch_id', 2); // Female branch
        } elseif (!if_can('see_all_branch')) {
            $query->where('members.branch_id', get_branch());
        }
    })
    ->when(!if_can('show_all_data'), function ($query) {
        $query->where('members.id', Auth::user()->member_id);
    })
    ->get()
    ->map(function ($member) {
        return [
            'id' => $member->id,
            'name' => $member->mem_name . '->' . $member->branch_name,
        ];
    })
    ->pluck('name', 'id');
@endphp
<div class="form-group">
    <div class="row">
        {!! Form::label('member', 'Member:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('member', $members, null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Note Field -->
<div class="form-group ">
    <div class="row">
        {!! Form::label('note', 'Note:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::textarea('note', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

{{-- <div class="form-group">
    <div class="row">
        {!! Form::label('status', 'Status:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('member', ['pending' => 'Pending', 'approved' => 'Approved', 'rejected' => 'Rejected'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div> --}}





<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('dietChartRequests.index') }}" class="btn btn-danger">Cancel</a>
</div>
