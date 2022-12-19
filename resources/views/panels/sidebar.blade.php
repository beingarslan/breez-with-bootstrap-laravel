<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="flex-shrink-0 p-3 bg-white">
        <ul class="list-unstyled ps-0">
          <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
              Home
            </button>
            <div class="collapse show" id="home-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="/dashboard" class="link-dark d-inline-flex text-decoration-none rounded">Dashboard</a></li>
                <li><a href="/update" class="link-dark d-inline-flex text-decoration-none rounded">Updates</a></li>
                <li><a href="/report" class="link-dark d-inline-flex text-decoration-none rounded">Reports</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
              Dashboard
            </button>
            <div class="collapse" id="dashboard-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="/overview" class="link-dark d-inline-flex text-decoration-none rounded">Overview</a></li>
                <li><a href="/weekly" class="link-dark d-inline-flex text-decoration-none rounded">Weekly</a></li>
                <li><a href="/monthly" class="link-dark d-inline-flex text-decoration-none rounded">Monthly</a></li>
                <li><a href="/annually" class="link-dark d-inline-flex text-decoration-none rounded">Annually</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
              Orders
            </button>
            <div class="collapse" id="orders-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="/order/new" class="link-dark d-inline-flex text-decoration-none rounded">New</a></li>
                <li><a href="/order/processed" class="link-dark d-inline-flex text-decoration-none rounded">Processed</a></li>
                <li><a href="/order/shipped" class="link-dark d-inline-flex text-decoration-none rounded">Shipped</a></li>
                <li><a href="/order/returned" class="link-dark d-inline-flex text-decoration-none rounded">Returned</a></li>
              </ul>
            </div>
          </li>
          <li class="border-top my-3"></li>
          <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
              Account
            </button>
            <div class="collapse" id="account-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="/account/new" class="link-dark d-inline-flex text-decoration-none rounded">New...</a></li>
                <li><a href="/account/profile" class="link-dark d-inline-flex text-decoration-none rounded">Profile</a></li>
                <li><a href="/account/setting" class="link-dark d-inline-flex text-decoration-none rounded">Settings</a></li>
                <li><a href="/logout" class="link-dark d-inline-flex text-decoration-none rounded">Sign out</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
</nav>
