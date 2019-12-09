@extends('layouts.master')

@section('title')
Users
@endsection

@section('content')
<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                Add New User
            </h3>
        </div>
    </div>
    <form class="kt-form">
        <div class="kt-portlet__body">
            <div class="kt-section kt-section--first">
                <div class="form-group">
                    <label>Full Name:</label>
                    <input type="email" class="form-control" placeholder="Enter full name">
                    <span class="form-text text-muted">Please enter your full name</span>
                </div>
                <div class="form-group">
                    <label>Email address:</label>
                    <input type="email" class="form-control" placeholder="Enter email">
                    <span class="form-text text-muted">We'll never share your email with anyone else</span>
                </div>
                <div class="form-group">
                    <label>Subscription</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text" id="basic-addon2">$</span>
                        </div>
                        <input type="text" class="form-control" placeholder="99.9">
                    </div>
                </div>
                <div class="form-group">
                    <label>Communication:</label>
                    <div class="kt-checkbox-list">
                        <label class="kt-checkbox">
                            <input type="checkbox"> Email
                            <span></span>
                        </label>
                        <label class="kt-checkbox">
                            <input type="checkbox"> SMS
                            <span></span>
                        </label>
                        <label class="kt-checkbox">
                            <input type="checkbox"> Phone
                            <span></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet__foot">
            <div class="kt-form__actions">
                <button type="reset" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </div>
    </form>
</div>
@endsection