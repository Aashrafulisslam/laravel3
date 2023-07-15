<aside class="sidebar-wrapper">
  <div class="iconmenu">
      <div class="nav-toggle-box">
          <div class="nav-toggle-icon"><i class="fa fa-list"></i></div>
      </div>
      <ul class="nav nav-pills flex-column">
        @if (auth()->user()->admin)
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Settings">
              <button class="nav-link" data-bs-toggle="pill" data-bs-target="#settings" type="button">
                <i class="fa-solid fa-gear"></i>
              </button>
        </li>
        @endif
            
          <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Blog">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#blog" type="button">
                  <i class="fa-sharp fa-solid fa-pen-nib"></i>
                </button>
          </li>

      </ul>
  </div>
  <div class="textmenu">
      <div class="brand-logo">
          <img src="{{ asset('adminAsset') }}/assets/images/brand-logo-2.png" width="140" alt=""/>
      </div>
      <div class="tab-content">
          <div class="tab-pane fade" id="settings">
              <div class="list-group list-group-flush">
                  <div class="list-group-item">
                      <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-0">Settings</h5>
                      </div>
                      <small class="mb-0">Some placeholder content</small>
                  </div>
                  <a href="{{ route('category') }}" class="list-group-item"><i class="bi bi-envelope"></i>Category</a>
                  <a href="{{ route('author.index') }}" class="list-group-item"><i class="bi bi-chat-left-text"></i>Author</a>
              </div>
          </div>

          <div class="tab-pane fade" id="blog">
              <div class="list-group list-group-flush">
                  <div class="list-group-item">
                      <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-0">Blog</h5>
                      </div>
                      <small class="mb-0">Some placeholder content</small>
                  </div>
                  <a href="{{route('blog')}}" class="list-group-item">
                      <i class="bi bi-envelope"></i>Add Blog</a>
                  <a href="{{ route('manage.blog') }}" class="list-group-item">
                      <i class="bi bi-chat-left-text"></i>Manage Blog</a>
              </div>
          </div>
      </div>
  </div>
</aside>
