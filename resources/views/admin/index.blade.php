@extends('admin.master')
@section('content')
<div class="row">
   <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
         <div class="x_title">
            <h2>List of Active Offers</h2>
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
            <div class="row">
               <div class="col-sm-12">
                  <div class="card-box table-responsive">
                     <p class="text-muted font-13 m-b-30">
                        List of Active Offers
                     </p>
                     <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                           <tr>
                              <th>Offer ID</th>
                              <th>Offer </th>
                              <th>Network</th>
                              <th>Vertical</th>
                              <th>Payout</th>
                              <th>Added</th>
                              <th>Expires</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>Tiger</td>
                              <td>Nixon</td>
                              <td>System Architect</td>
                              <td>Edinburgh</td>
                              <td>61</td>
                              <td>2011/04/25</td>
                              <td>$320,800</td>
                           </tr>
                           <tr>
                              <td>Garrett</td>
                              <td>Winters</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>63</td>
                              <td>2011/07/25</td>
                              <td>$170,750</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<br />
<div class="row">
   <div class="col-md-4 col-sm-4 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Pie Area</h2>
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

        <div id="echart_pie2" style="height:350px;"></div>

      </div>
    </div>
   </div>
   <div class="col-md-8 col-sm-8 ">
      <div class="row">
         <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
               <div class="x_title">
                  <h2>Visitors location <small>geo-presentation</small></h2>
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
                  <div class="dashboard-widget-content">
                     <div class="col-md-4 hidden-small">
                        <h2 class="line_30">125.7k Views from 60 countries</h2>
                        <table class="countries_list">
                           <tbody>
                              <tr>
                                 <td>United States</td>
                                 <td class="fs15 fw700 text-right">33%</td>
                              </tr>
                              <tr>
                                 <td>France</td>
                                 <td class="fs15 fw700 text-right">27%</td>
                              </tr>
                              <tr>
                                 <td>Germany</td>
                                 <td class="fs15 fw700 text-right">16%</td>
                              </tr>
                              <tr>
                                 <td>Spain</td>
                                 <td class="fs15 fw700 text-right">11%</td>
                              </tr>
                              <tr>
                                 <td>Britain</td>
                                 <td class="fs15 fw700 text-right">10%</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div id="world-map-gdp" class="col-md-8 col-sm-12 " style="height:230px;"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
