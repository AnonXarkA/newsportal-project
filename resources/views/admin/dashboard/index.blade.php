@extends('admin.layouts.master')

@section('content')
<<<<<<< HEAD
<section class="section">
    <div class="section-header">
        <h1>{{ __('admin.Dashboard') }}</h1>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>{{ __('admin.Total News') }}</h4>
                    </div>
                    <div class="card-body">
                        {{ $publishedNews }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>{{ __('admin.Pending News') }}</h4>
                    </div>
                    <div class="card-body">
                        {{ $pendingNews }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>{{ __('admin.Total Categories') }}</h4>
                    </div>
                    <div class="card-body">
                        {{ $Categories }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-language"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>{{ __('admin.Total Languages') }}</h4>
                    </div>
                    <div class="card-body">
                        {{ $languages }}
=======
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Admin</h4>
                        </div>
                        <div class="card-body">
                            10
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>News</h4>
                        </div>
                        <div class="card-body">
                            42
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Reports</h4>
                        </div>
                        <div class="card-body">
                            1,201
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-circle"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Online Users</h4>
                        </div>
                        <div class="card-body">
                            47
                        </div>
>>>>>>> origin/feature-branch
                    </div>
                </div>
            </div>
        </div>

<<<<<<< HEAD
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                    <i class="fas fa-user-shield"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>{{ __('admin.Total Roles') }}</h4>
                    </div>
                    <div class="card-body">
                        {{ $roles }}
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-users-cog"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>{{ __('admin.Total Permissions') }}</h4>
                    </div>
                    <div class="card-body">
                        {{ $permissions }}
                    </div> --}}
                </div>
            </div>
        </div>

        {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fas fa-hashtag"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>{{ __('admin.Total Socials') }}</h4>
                    </div>
                    <div class="card-body">
                        {{ $socials }}
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="fas fa-envelope-open"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>{{ __('admin.Total Subscribers') }}</h4>
                    </div>
                    <div class="card-body">
                        {{ $subscribers }} --}}
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
=======
    </section>
>>>>>>> origin/feature-branch
@endsection
