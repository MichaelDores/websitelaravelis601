@extends('layouts.default')
@section('content')
    <div class="card">
        <div class="card-title"><h1>Questions?</h1>

        <p class ="lead">Contact Us</p></div>


<form method="post" action=/contact role="form">

    {{ csrf_field() }}

    <div class="messages"></div>

    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">First name</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your first name">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Last name</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your last name">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Email</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_need">Please specify your need</label>
                    <select id="form_need" name="need" class="form-control">
                        <option value=""></option>
                        <option value="Request quotation">Additional NYG Info</option>
                        <option value="Request order status">Additional Eli Manning Info</option>
                        <option value="Request copy of an invoice">Season Ticket Information</option>
                        <option value="Other">Other</option>
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Message</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for the NYG" rows="4"></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-success btn-send" value="Send message" style="background-color:red">
            </div>
        </div>
    </div>

</form>
        @stop