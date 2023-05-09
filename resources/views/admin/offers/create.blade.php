@extends('admin.master')
@section('content')
<div class="row">
   <div class="col-md-12 col-sm-12">
      <div class="x_panel">
         <div class="x_title">
            <h2><i class="fa fa-bars"></i> Campaign Info</h2>
            <ul class="nav navbar-right panel_toolbox">
               <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
               </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                     <a class="dropdown-item" href="#">Settings 1</a>
                     <a class="dropdown-item" href="#">Settings 2</a>
                  </div>
               </li>
               <li><a class="close-link"><i class="fa fa-close"></i></a>
               </li>
            </ul>
            <div class="clearfix"></div>
         </div>
         <div class="x_content">
            <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
               <li class="nav-item">
                  <a class="nav-link active" id="new-tab" data-toggle="tab" href="#new" role="tab" aria-controls="new" aria-selected="true">Offers Details</a>
               </li>
            </ul>
            <div class="tab-content" id="myTabContent">
               <div class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="new-tab">
                  <div class="row">
                     <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                           <div class="x_title">
                              <h2>Create New Offer</h2>
                              <ul class="nav navbar-right panel_toolbox">
                                 <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                 </li>
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                       <li><a class="dropdown-item" href="#">Settings 1</a>
                                       </li>
                                       <li><a class="dropdown-item" href="#">Settings 2</a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li><a class="close-link"><i class="fa fa-close"></i></a>
                                 </li>
                              </ul>
                              <div class="clearfix"></div>
                           </div>
                           <div class="x_content">
                              <form method="post" action="{{ route('offer.get-offer') }}">
                                 @csrf
                                 <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Offer ID</label>
                                    <div class="col-md-6 col-sm-6">
                                       <input type="text" required="required" name="offer_id" class="form-control">
                                    </div>
                                 </div>
                                 <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 label-align">Select Network</label>
                                    <div class="col-md-6 col-sm-6">
                                       <select class="form-control" name="network_id">
                                          <option disabled selected hidden>Select your option</option>
                                          @foreach ($networks as $network)
                                             <option value="{{ $network->id }}">{{ $network->network }}</option>
                                          @endforeach
                                       </select>
                                    </div>
                                 </div>
                                 <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                       <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                 </div>
                              </form>
                              <br />
                              <hr>
                              <br />
                              <form method="post" action="{{ route('offer.store') }}">
                                 @csrf

                                 @if(isset($responseBody)) 
                                    <div class="item form-group">
                                       <label class="col-form-label col-md-3 col-sm-3 label-align">Offer Name </label>
                                       <div class="col-md-6 col-sm-6">
                                          <input type="text" required="required" name="offer" class="form-control" value="{{$responseBody['name']}}">
                                       </div>
   
                                    </div>
                                    <div class="item form-group">
                                       <label class="col-form-label col-md-3 col-sm-3 label-align">Offer ID</label>
                                       <div class="col-md-6 col-sm-6">
                                          <input type="text" required="required" name="sid" class="form-control" value="{{$responseBody['network_offer_id']}}">
                                       </div>
                                    </div>
                                    <div class="item form-group">
                                       <label class="control-label col-md-3 col-sm-3 label-align">Select Network</label>
                                       <div class="col-md-6 col-sm-6">
                                          <select class="form-control" name="network_id">
                                             <option disabled selected hidden>Select your option</option>
                                             @foreach ($networks as $network)
                                                <option value="{{ $network->id }}">{{ $network->network }}</option>
                                             @endforeach
                                          </select>
                                       </div>
                                    </div>
                                    <div class="item form-group">
                                       <label class="control-label col-md-3 col-sm-3 label-align">Descripton / Restriction</label>
                                       <div class="col-md-6 col-sm-6">
                                          <textarea class="form-control" rows="3" name="description">
                                             {{$responseBody['html_description']}}
                                          </textarea>
                                       </div>
                                    </div>
                                    <div class="item form-group">
                                       <label class="col-form-label col-md-3 col-sm-3 label-align">Payout</label>
                                       <div class="col-md-6 col-sm-6">
                                          <input type="text"required="required" class="form-control" name="payout" value="{{$responseBody['relationship']['payouts']['entries'][0]['payout_amount']}}">
                                       </div>
                                    </div>
                                    <div class="item form-group">
                                       <label class="control-label col-md-3 col-sm-3 label-align">Select Vertical</label>
                                       <div class="col-md-6 col-sm-6">
                                          <select class="form-control" name="vertical_id">
                                             <option disabled selected hidden>Select your option</option>
                                             @foreach ($verticals as $vertical)
                                                <option value="{{ $vertical->id }}">{{ $vertical->vertical }}</option>
                                           @endforeach
                                          </select>
                                       </div>
                                    </div>
                                    <div class="item form-group">
                                       <label class="control-label col-md-3 col-sm-3 label-align">GEOs</label>
                                       <div class="col-md-6 col-sm-6">
                                          
                                          <input id="tags_1" type="text" class="tags form-control" name="geos[]"/  value="
                                          @for ($i = 0; $i < count($responseBody['relationship']['ruleset']['countries']); $i++)
                                            {{$responseBody['relationship']['ruleset']['countries'][$i]['country_code'] .','}} 
                                          @endfor
                                          ">
                                          
                                          <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                                       </div>
                                    </div>
                                 @else
                                 <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Offer Name </label>
                                    <div class="col-md-6 col-sm-6">
                                       <input type="text" required="required" name="offer" class="form-control">
                                    </div>

                                 </div>
                                 <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Offer ID</label>
                                    <div class="col-md-6 col-sm-6">
                                       <input type="text" required="required" name="sid" class="form-control">
                                    </div>
                                 </div>
                                 <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 label-align">Select Network</label>
                                    <div class="col-md-6 col-sm-6">
                                       <select class="form-control" name="network_id">
                                          <option disabled selected hidden>Select your option</option>
                                          @foreach ($networks as $network)
                                             <option value="{{ $network->id }}">{{ $network->network }}</option>
                                          @endforeach
                                       </select>
                                    </div>
                                 </div>
                                 <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 label-align">Descripton / Restriction</label>
                                    <div class="col-md-6 col-sm-6">
                                       <textarea class="form-control" rows="3" name="description"></textarea>
                                    </div>
                                 </div>
                                 <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Payout</label>
                                    <div class="col-md-6 col-sm-6">
                                       <input type="text"required="required" class="form-control" name="payout">
                                    </div>
                                 </div>
                                 <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 label-align">Select Vertical</label>
                                    <div class="col-md-6 col-sm-6">
                                       <select class="form-control" name="vertical_id">
                                          <option disabled selected hidden>Select your option</option>
                                          @foreach ($verticals as $vertical)
                                             <option value="{{ $vertical->id }}">{{ $vertical->vertical }}</option>
                                        @endforeach
                                       </select>
                                    </div>
                                 </div>
                                 <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 label-align">GEOs</label>
                                    <div class="col-md-6 col-sm-6">

                                       <input id="tags_1" type="text" class="tags form-control" name="geos[]"/>
                                       <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                                    </div>
                                 </div>
                                 

                                 @endif


                                 <div class="form-group row">
                                    <label class="control-label col-md-3 col-sm-3 label-align">Offer Type</label>
                                    <div class="col-md-6 col-sm-6">
                                       <div class="radio">
                                          <label><input type="radio" class="flat" name="type" value="CPA"> CPA</label>
                                          <label><input type="radio" class="flat" name="type" value="CPL"> CPL</label>
                                          <label><input type="radio" class="flat" name="type" value="RevShare"> RevShare</label>
                                       </div>
                                    </div>
                                 </div>

                                 
                                 <div class="ln_solid"></div>
                                 <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                       <button class="btn btn-primary" type="button">Cancel</button>
                                       <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                 </div>
                              </form>
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

 
@endsection
