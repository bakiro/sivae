  <nav class="ch">
    <a class="aov" href="/">
    <span class="bv act aow"></span>
    </a>
    <div class="aoz">
      <ul class="nav of aox">
        <li @if($active=="1")class="active"@endif>
          <a href="/office" title="Overview" data-toggle="tooltip" data-placement="right" data-container="body">
          <span class="bv abw"></span>
          <small class="aoy sa">Overview</small>
          </a>
        </li>
        <li @if($active=="2")class="active"@endif>
          <a href="/office/order-history" title="Order history" data-toggle="tooltip" data-placement="right" data-container="body">
          <span class="bv aie"></span>
          <small class="aoy sa">History</small>
          </a>
        </li>
        <li @if($active=="3")class="active"@endif>
          <a href="/office/date" title="Fluid layout" data-toggle="tooltip" data-placement="right" data-container="body">
          <span class="bv abh"></span>
          <small class="aoy sa">Fluid layout</small>
          </a>
        </li>
        <li>
          <a href="/office/#" title="Icon-nav layout" data-toggle="tooltip" data-placement="right" data-container="body">
          <span class="bv vd"></span>
          <small class="aoy sa">Icon nav</small>
          </a>
        </li>
        <li >
          <a href="/office/#" title="Docs" data-toggle="tooltip" data-placement="right" data-container="body">
          <span class="bv ade"></span>
          <small class="aoy sa">Docs</small>
          </a>
        </li>
        <li >
          <a href="/office/#" title="Light UI" data-toggle="tooltip" data-placement="right" data-container="body">
          <span class="bv aak"></span>
          <small class="aoy sa">Light UI</small>
          </a>
        </li>
        <li>
          <a href="/office/#" title="Signed in as mdo" data-toggle="tooltip" data-placement="right" data-container="body">
          <img src="/img/avatar-mdo.png" alt="" class="cs cn">
          <small class="aoy sa">@mdo</small>
          </a>
        </li>
      </ul>
    </div>
  </nav>