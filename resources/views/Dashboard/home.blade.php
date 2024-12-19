@extends('Dashboard.main')
@section('main-section')

<style>
     /* Main Content Styling */
     #main-content {
            margin-left: 250px;
        
        }
        h1{
            text-align: center;
        }
        p{
            text-align: center;
            margin-bottom: 20px;
        }
</style>
 
 <!-- Main Content Area -->
 <div class="content-section">
    <h1>Welcome to the Admin Dashboard</h1>
    <p>Here you can manage users, check analytics, and perform administrative tasks.</p>

    <!-- Cards for Stats -->
    <div class="row">
        <div class="col-md-3 mb-3">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h5 class="card-title">Total Sales</h5>
                    <p class="card-text">$12,345</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h5 class="card-title">Users Online</h5>
                    <p class="card-text">150</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card text-white bg-danger">
                <div class="card-body">
                    <h5 class="card-title">Pending Orders</h5>
                    <p class="card-text">5</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card text-white bg-warning">
                <div class="card-body">
                    <h5 class="card-title">New Messages</h5>
                    <p class="card-text">20</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <div class="mt-4">
        <h3>Recent Activity</h3>
        <ul>
            <li>New user registered: John Doe</li>
            <li>Order #12345 shipped</li>
            <li>Analytics report generated</li>
        </ul>
    </div>
</div>
</div>
@endsection
