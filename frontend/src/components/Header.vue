<template>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <RouterLink class="navbar-brand" to="/">
        <i class="fas fa-film mr-2"></i>
        Gallery
      </RouterLink>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <RouterLink class="nav-link nav-link-1 active" aria-current="page" to="/">
              Photos
            </RouterLink>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-2" href="videos.html">Videos</a>
          </li>
          <li class="nav-item">
            <RouterLink class="nav-link nav-link-3" to="/about">About</RouterLink>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-4" href="contact.html">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>
