<div class="sidebar">
    <div class="sidebar-wrapper">
        <ul class="nav">
            

            <li>
                <a data-toggle="collapse" href="#inventory" {{ $section == 'inventory' ? 'aria-expanded=true' : '' }}>
                    <i class="tim-icons icon-app"></i>
                    <span class="nav-link-text">{{__('translation.Inventory')}}</span>
                </a>

                <div class="collapse {{ $section == 'inventory' ? 'show' : '' }}" id="inventory">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'istats') class="active " @endif>
                            <a href="{{ route('inventory.stats') }}">
                                <i class="tim-icons icon-chart-pie-36"></i>
                                <p>{{__('translation.Statistics')}}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'products') class="active " @endif>
                            <a href="{{ route('products.index') }}">
                                <i class="tim-icons icon-notes"></i>
                                <p>{{__('translation.kazkan')}}</p>
                            </a>
                        </li>
                        
                        <li @if ($pageSlug == 'categories') class="active " @endif>
                            <a href="{{ route('categories.index') }}">
                                <i class="tim-icons icon-tag"></i>
                                <p>{{__('translation.categories')}}</p>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </li>

            <li @if ($pageSlug == 'clients') class="active " @endif>
                <a href="{{ route('clients.index') }}">
                    <i class="tim-icons icon-single-02"></i>
                    <p>{{__('translation.Clients')}}</p>
                </a>
            </li>
           
            @can('manage_users')
                <li>
                    <a data-toggle="collapse" href="#users" {{ $section == 'users' ? 'aria-expanded=true' : '' }}>
                        <i class="tim-icons icon-badge" ></i>
                        <span class="nav-link-text">{{__('translation.Users')}}</span>
                    </a>

                    <div class="collapse {{ $section == 'users' ? 'aria-expanded=true' : '' }}" id="users">
                        <ul class="nav pl-4">
                            <li @if ($pageSlug == 'profile') class="active " @endif>
                                <a href="{{ route('profile.edit')  }}">
                                    <i class="tim-icons icon-badge"></i>
                                    <p>{{__('translation.My_profile')}}</p>
                                </a>
                            </li>
                            <li @if ($pageSlug == 'users-list') class="active " @endif>
                                <a href="{{ route('users.index')  }}">
                                    <i class="tim-icons icon-notes"></i>
                                    <p>{{__('translation.Manage_Users')}}</p>
                                </a>
                            </li>
                            <li @if ($pageSlug == 'users-create') class="active " @endif>
                                <a href="{{ route('users.create')  }}">
                                    <i class="tim-icons icon-simple-add"></i>
                                    <p>{{__('translation.New_user')}}</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endcan
           
        </ul>
    </div>
</div>
