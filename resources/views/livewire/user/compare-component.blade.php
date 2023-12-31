<div class="main-content">
    <section class="section">
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <h5>Compare</h5>
          <button class="btn btn-info">Reset Compare List</button>
        </div>
        <div class="card-body">
         <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Brand</th>
                <th>Category</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>LeYi for iPhone 7 Plus Case, iPhone 8 Plus Phone Case with [2 Pack] Tempered Glass Screen Protectors, Shockproof Full-Body Liquid Silicone with Anti-Scratch Microfiber Liner Case iPhone 7 Plus, Black…</td>
                <td>
                  <img src="{{asset('./userAssets/assets/img/products/iphone.jpg')}}" alt="" width="120">
                </td>
                <td>$15.89</td>
                <td>Apple</td>
                <td>Mobile</td>
                <td style="width: 140px;">
                  <button class="btn btn-primary w-100">Add to cart</button>
                </td>
              </tr>

              <tr>
                <td>Apple iPhone 14 Pro Max, 256GB, Deep Purple for AT&T (Renewed)</td>
                <td>
                  <img src="{{asset('./userAssets/assets/img/products/iphone13.jpg')}}" alt="" width="120">
                </td>
                <td>$1555.89</td>
                <td>Apple</td>
                <td>Mobile</td>
                <td style="width: 140px;">
                  <button class="btn btn-primary w-100">Add to cart</button>
                </td>
              </tr>

              <tr>
                <td>Apple iPhone 12 Pro Max, 256GB, Pacific Blue - Fully Unlocked (Renewed)</td>
                <td>
                  <img src="{{asset('./userAssets/assets/img/products/iphone14.jpg')}}" alt="" width="120">
                </td>
                <td>$1855.89</td>
                <td>Apple</td>
                <td>Mobile</td>
                <td style="width: 140px;">
                  <button class="btn btn-primary w-100">Add to cart</button>
                </td>
              </tr>

              
            </tbody>
          </table>
         </div>
        </div>
      </div>
    
      
    </section>
    <div class="settingSidebar">
      <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
      </a>
      <div class="settingSidebar-body ps-container ps-theme-default">
        <div class=" fade show active">
          <div class="setting-panel-header">Setting Panel
          </div>
          <div class="p-15 border-bottom">
            <h6 class="font-medium m-b-10">Select Layout</h6>
            <div class="selectgroup layout-color w-50">
              <label class="selectgroup-item">
                <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                <span class="selectgroup-button">Light</span>
              </label>
              <label class="selectgroup-item">
                <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                <span class="selectgroup-button">Dark</span>
              </label>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <h6 class="font-medium m-b-10">Sidebar Color</h6>
            <div class="selectgroup selectgroup-pills sidebar-color">
              <label class="selectgroup-item">
                <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                  data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
              </label>
              <label class="selectgroup-item">
                <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                  data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
              </label>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <h6 class="font-medium m-b-10">Color Theme</h6>
            <div class="theme-setting-options">
              <ul class="choose-theme list-unstyled mb-0">
                <li title="white" class="active">
                  <div class="white"></div>
                </li>
                <li title="cyan">
                  <div class="cyan"></div>
                </li>
                <li title="black">
                  <div class="black"></div>
                </li>
                <li title="purple">
                  <div class="purple"></div>
                </li>
                <li title="orange">
                  <div class="orange"></div>
                </li>
                <li title="green">
                  <div class="green"></div>
                </li>
                <li title="red">
                  <div class="red"></div>
                </li>
              </ul>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <div class="theme-setting-options">
              <label class="m-b-0">
                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                  id="mini_sidebar_setting">
                <span class="custom-switch-indicator"></span>
                <span class="control-label p-l-10">Mini Sidebar</span>
              </label>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <div class="theme-setting-options">
              <label class="m-b-0">
                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                  id="sticky_header_setting">
                <span class="custom-switch-indicator"></span>
                <span class="control-label p-l-10">Sticky Header</span>
              </label>
            </div>
          </div>
          <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
            <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
              <i class="fas fa-undo"></i> Restore Default
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>