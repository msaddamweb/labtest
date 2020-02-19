@extends('layouts.theme1.master')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">{{$title}}</h3>
            </div>

        </div>
        <div class="content-body"><!-- Basic Inputs start -->
            <section class="textarea-select">
                <!-- Textarea start -->
                <div class="row">
                    <div class="col-12 mt-3 mb-1">
                        <h4 class="text-uppercase">Textarea &amp; Select</h4>
                        <p>Textual form controls—like <code>&lt;select&gt;</code>s, and <code>&lt;textarea&gt;</code>s—are styled with the <code>.form-control</code> class. Included are styles for general appearance, focus state, sizing, and more.</p>
                    </div>
                </div>
                <div class="row match-height">
                    <div class="col-lg-6 col-md-12">
                        <div class="card">

                            <div class="card-block">

                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Campaign Title</h4>
                                    </div>
                                    <div class="card-block">
                                        <div class="card-body">
                                            <fieldset class="form-group">
                                                <input type="text" name="text" class="form-control" id="passwordField">
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Sender Number</h4>
                                    </div>
                                    <div class="card-block">
                                        <div class="card-body">
                                            <fieldset class="form-group">
                                                <input type="text"  name="sender" class="form-control" id="passwordField">
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                    <h5 class="mt-2">message</h5>
                                    <fieldset class="form-group">

                                        <textarea class="form-control" id="descTextarea" rows="3" placeholder="Textarea with description"></textarea>
                                    </fieldset>
                                    <h5 class="mt-2">Basic Select</h5>
                                    <fieldset class="form-group">
                                        <input type="radio" id="pending" name="status" value="pending">
                                        <label for="pending">pending</label><br>
                                        <input type="radio" id="processing" name="status" value="processing">
                                        <label for="processing">Female</label><br>
                                        <input type="radio" id="complete" name="status" value="complete">
                                        <label for="complete">complete</label>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>

                <!-- Textarea end -->
            </section>


        </div>
    </div>
</div>
