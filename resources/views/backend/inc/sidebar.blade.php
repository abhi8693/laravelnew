<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="index.html">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{route('categories.create')}}">
            <i class="bi bi-circle"></i><span>Add category</span>
          </a>
        </li>
        <li>
          <a href="{{route('categories.index')}}">
            <i class="bi bi-circle"></i><span>Category_List</span>
          </a>
        </li>
        <li>
          <a href="{{route('subcategories.create')}}">
            <i class="bi bi-circle"></i><span>Add Sub-Category</span>
          </a>
        </li>
        <li>
          <a href="{{route('subcategories.index')}}">
            <i class="bi bi-circle"></i><span>Sub-Category_List</span>
          </a>
        </li>
      </ul>
    </li><!-- End Components Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">

        <i class="bi bi-journal-text"></i><span>Slider</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul  id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{route('sliders.create')}}">
            <i class="bi bi-circle"></i><span>Add-Slider</span>
          </a>
        </li>

      </ul>
    </li><!-- End Forms Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#iconss-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>colletion</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul  id="iconss-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{route('collections.create')}}">
            <i class="bi bi-circle"></i><span>Add Collection</span>
          </a>
        </li>

      </ul>
    </li><!-- End Tables Nav -->


    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#iconsss-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul   id="iconsss-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{route('selling_products.create')}}">
            <i class="bi bi-circle"></i><span>Add Products</span>
          </a>
        </li>
        <li>
          <a href="{{route('selling_products.index')}}">
            <i class="bi bi-circle"></i><span>Products_list</span>
          </a>
        </li>
       
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">

        <i class="bi bi-layout-text-window-reverse"></i><span>Banner</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul  id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

        <li>
          <a href="{{route('banners.create')}}">
            <i class="bi bi-circle"></i><span>Add Banner</span>
          </a>
        </li>

        <li>
          <i class="bi bi-circle"></i><span>Selling Product List</span>
          </a>
        </li>
      </ul>
    </li>

   

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#chartsss-nav" data-bs-toggle="collapse" href="#">

        <i class="bi bi-layout-text-window-reverse"></i><span>Blog</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="chartsss-nav" class="nav-content  " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{route('blogs.create')}}">
            <i class="bi bi-circle"></i><span>Add Blog</span>
          </a>
        </li>

        <li>
          <i class="bi bi-circle"></i><span> Product List</span>
          </a>
        </li>
      </ul>
    </li>
    

  </ul>
  <!-- waefsdgr -->

</aside><!-- End Sidebar-->