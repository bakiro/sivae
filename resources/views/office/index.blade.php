@extends('office.template')

@section('header')
    <link href="/assets/css/cms.css" rel="stylesheet">
@endsection

@section('content')
<div class="aou">
  @include('office.office-menu')
  <div class="ft ui">
    <div class="apa alg">
  <div class="apb">
    <h6 class="apd">Dashboards</h6>
    <h2 class="apc">Overview</h2>
  </div>

  <div class="ob ape">
    <div class="tn aol">
      <input type="text" value="01/01/15 - 01/08/15" class="form-control" data-provide="datepicker">
      <span class="bv wt"></span>
    </div>
  </div>
</div>

<div class="anv aky ali">
  <h3 class="anw anx">Quick stats</h3>
</div>
<div class="fu apt">
  <div class="gq gf ala">
    <div class="apu">
      <div class="alz">
        <span class="anj">Page views</span>
        <h2 class="ani">
          12,938
          <small class="bz pd">5%</small>
        </h2>
      </div>
      <canvas id="sparkline1" width="378" height="94" class="apv" data-chart="spark-line" data-value="[{strokeColor: '#1ca8dd', fillColor:'rgba(28,168,221,.03)', data:[28,68,41,43,96,45,100]}]" data-labels="['a', 'b','c','d','e','f','g']" style="width: 189px; height: 47px;"></canvas>
    </div>
  </div>
  <div class="gq gf ala">
    <div class="apu">
      <div class="alz">
        <span class="anj">Downloads</span>
        <h2 class="ani">
          758
          <small class="bz pg">1.3%</small>
        </h2>
      </div>
      <canvas id="sparkline1" width="378" height="94" class="apv" data-chart="spark-line" data-value="[{strokeColor: '#1ca8dd', fillColor:'rgba(28,168,221,.03)', data:[4,34,64,27,96,50,80]}]" data-labels="['a', 'b','c','d','e','f','g']" style="width: 189px; height: 47px;"></canvas>
    </div>
  </div>
  <div class="gq gf ala">
    <div class="apu">
      <div class="alz">
        <span class="anj">Sign-ups</span>
        <h2 class="ani">
          1,293
          <small class="bz pd">6.75%</small>
        </h2>
      </div>
      <canvas id="sparkline1" width="378" height="94" class="apv" data-chart="spark-line" data-value="[{strokeColor: '#1ca8dd', fillColor:'rgba(28,168,221,.03)', data:[12,38,32,60,36,54,68]}]" data-labels="['a', 'b','c','d','e','f','g']" style="width: 189px; height: 47px;"></canvas>
    </div>
  </div>
  <div class="gq gf ala">
    <div class="apu">
      <div class="alz">
        <span class="anj">Downloads</span>
        <h2 class="ani">
          758
          <small class="bz pd">1.3%</small>
        </h2>
      </div>
      <canvas id="sparkline1" width="378" height="94" class="apv" data-chart="spark-line" data-value="[{strokeColor: '#1ca8dd', fillColor:'rgba(28,168,221,.03)', data:[43,48,52,58,50,95,100]}]" data-labels="['a', 'b','c','d','e','f','g']" style="width: 189px; height: 47px;"></canvas>
    </div>
  </div>
</div>

<div class="anv all">
  <ul class="nav of anw any" role="tablist">
    <li class="active" role="presentation">
      <a href="#sales" role="tab" data-toggle="tab" aria-controls="sales">Sales</a>
    </li>
    <li role="presentation">
      <a href="#inventory" role="tab" data-toggle="tab" aria-controls="inventory">Inventory</a>
    </li>
    <li role="presentation">
      <a href="#profit" role="tab" data-toggle="tab" aria-controls="profit">Profit</a>
    </li>
  </ul>
</div>

<div class="oh">
  <div role="tabpanel" class="oi active" id="sales">
    <div class="aqo">
       <canvas
        class="anu"
        width="600" height="400"
        data-chart="line"
        data-scale-line-color="transparent"
        data-scale-grid-line-color="rgba(255,255,255,.05)"
        data-scale-font-color="#a2a2a2"
        data-labels="['','Aug 29','','','Sept 5','','','Sept 12','','','Sept 19','']"
        data-value="[{fillColor: 'rgba(28,168,221,.03)', data: [2500, 3300, 2512, 2775, 2498, 3512, 2925, 4275, 3507, 3825, 3445, 3985]}]">
      </canvas>
    </div>
  </div>

  <div role="tabpanel" class="oi" id="inventory">
    <div class="aqo">
      <canvas
        class="anu"
        width="600" height="400"
        data-chart="bar"
        data-scale-line-color="transparent"
        data-scale-grid-line-color="rgba(255,255,255,.05)"
        data-scale-font-color="#a2a2a2"
        data-labels="['August','September','October','November','December','January','February']"
        data-value="[{ label: 'First dataset', data: [65, 59, 80, 81, 56, 55, 40] }, { label: 'Second dataset', data: [28, 48, 40, 19, 86, 27, 90] }]">
      </canvas>
    </div>
  </div>

  <div role="tabpanel" class="oi" id="profit">
    <div class="fu aqp db">
      <div class="gi">
        <div class="aqq ale">
          <canvas
            class="ant"
            width="200" height="200"
            data-chart="doughnut"
            data-segment-stroke-color="#222"
            data-value="[{ value: 230, color: '#1ca8dd', label: 'Returning' }, { value: 130, color: '#1bc98e', label: 'New' }]">
          </canvas>
        </div>
        <strong class="dh">Traffic</strong>
        <h3>New vs Returning</h3>
      </div>
      <div class="gi">
        <div class="aqq ale">
          <canvas
            class="ant"
            width="200" height="200"
            data-chart="doughnut"
            data-segment-stroke-color="#222"
            data-value="[{ value: 330, color: '#1ca8dd', label: 'Recurring' }, { value: 30, color: '#1bc98e', label: 'New' }]">
          </canvas>
        </div>
        <strong class="dh">Revenue</strong>
        <h3>New vs Recurring</h3>
      </div>
      <div class="gi">
        <div class="aqq ale">
          <canvas
            class="ant"
            width="200" height="200"
            data-chart="doughnut"
            data-segment-stroke-color="#222"
            data-value="[{ value: 100, color: '#42a5f5', label: 'Referrals' }, { value: 260, color: '#1bc98e', label: 'Direct' }]">
          </canvas>
        </div>
        <strong class="dh">Traffic</strong>
        <h3>Direct vs Referrals</h3>
      </div>
    </div>
  </div>
</div>

<div class="anv aln ali">
  <h3 class="anw anx">Other</h3>
</div>

<div class="fu">
  <div class="gj ala">
    <div class="by">
      <h4 class="ty">
        Countries
      </h4>
      
        <a class="ph" href="#">
          <span class="tz" style="width: 62.4%;"></span>
          <span class="dy dh">62.4%</span>
          United States
        </a>
      
        <a class="ph" href="#">
          <span class="tz" style="width: 15.0%;"></span>
          <span class="dy dh">15.0%</span>
          India
        </a>
      
        <a class="ph" href="#">
          <span class="tz" style="width: 5.0%;"></span>
          <span class="dy dh">5.0%</span>
          United Kingdom
        </a>
      
        <a class="ph" href="#">
          <span class="tz" style="width: 5.0%;"></span>
          <span class="dy dh">5.0%</span>
          Canada
        </a>
      
        <a class="ph" href="#">
          <span class="tz" style="width: 4.5%;"></span>
          <span class="dy dh">4.5%</span>
          Russia
        </a>
      
        <a class="ph" href="#">
          <span class="tz" style="width: 2.3%;"></span>
          <span class="dy dh">2.3%</span>
          Mexico
        </a>
      
        <a class="ph" href="#">
          <span class="tz" style="width: 1.7%;"></span>
          <span class="dy dh">1.7%</span>
          Spain
        </a>
      
        <a class="ph" href="#">
          <span class="tz" style="width: 1.5%;"></span>
          <span class="dy dh">1.5%</span>
          France
        </a>
      
        <a class="ph" href="#">
          <span class="tz" style="width: 1.4%;"></span>
          <span class="dy dh">1.4%</span>
          South Africa
        </a>
      
        <a class="ph" href="#">
          <span class="tz" style="width: 1.2%;"></span>
          <span class="dy dh">1.2%</span>
          Japan
        </a>
      
    </div>
    <a href="#" class="ce apn">All countries</a>
  </div>
  <div class="gj ala">
    <div class="by">
      <h4 class="ty">
        Most visited pages
      </h4>
      
        <a class="ph" href="#">
          <span class="dy dh">3,929,481</span>
          / (Logged out)
        </a>
      
        <a class="ph" href="#">
          <span class="dy dh">1,143,393</span>
          / (Logged in)
        </a>
      
        <a class="ph" href="#">
          <span class="dy dh">938,287</span>
          /tour
        </a>
      
        <a class="ph" href="#">
          <span class="dy dh">749,393</span>
          /features/something
        </a>
      
        <a class="ph" href="#">
          <span class="dy dh">695,912</span>
          /features/another-thing
        </a>
      
        <a class="ph" href="#">
          <span class="dy dh">501,938</span>
          /users/username
        </a>
      
        <a class="ph" href="#">
          <span class="dy dh">392,842</span>
          /page-title
        </a>
      
        <a class="ph" href="#">
          <span class="dy dh">298,183</span>
          /some/page-slug
        </a>
      
        <a class="ph" href="#">
          <span class="dy dh">193,129</span>
          /another/directory/and/page-title
        </a>
      
        <a class="ph" href="#">
          <span class="dy dh">93,382</span>
          /one-more/page/directory/file-name
        </a>
      
    </div>
    <a href="#" class="ce apn">View all pages</a>
  </div>
  <div class="gj ala">
    <div class="by">
      <h4 class="ty">
        Devices and resolutions
      </h4>
      
        <a class="ph" href="#">
          <span class="dy dh">3,929,481</span>
          Desktop (1920x1080)
        </a>
      
        <a class="ph" href="#">
          <span class="dy dh">1,143,393</span>
          Desktop (1366x768)
        </a>
      
        <a class="ph" href="#">
          <span class="dy dh">938,287</span>
          Desktop (1440x900)
        </a>
      
        <a class="ph" href="#">
          <span class="dy dh">749,393</span>
          Desktop (1280x800)
        </a>
      
        <a class="ph" href="#">
          <span class="dy dh">695,912</span>
          Tablet (1024x768)
        </a>
      
        <a class="ph" href="#">
          <span class="dy dh">501,938</span>
          Tablet (768x1024)
        </a>
      
        <a class="ph" href="#">
          <span class="dy dh">392,842</span>
          Phone (320x480)
        </a>
      
        <a class="ph" href="#">
          <span class="dy dh">298,183</span>
          Phone (720x450)
        </a>
      
        <a class="ph" href="#">
          <span class="dy dh">193,129</span>
          Desktop (2560x1080)
        </a>
      
        <a class="ph" href="#">
          <span class="dy dh">93,382</span>
          Desktop (2560x1600)
        </a>
      
    </div>
    <a href="#" class="ce apn">View all devices</a>
  </div>
</div>

  </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/js/chart.js') }}"></script>
    <script src="{{ asset('/assets/js/tablesorter.min.js') }}"></script>
    <script src="{{ asset('/assets/js/toolkit.js') }}"></script>
    <script src="{{ asset('/assets/js/application.js') }}"></script>
@endsection