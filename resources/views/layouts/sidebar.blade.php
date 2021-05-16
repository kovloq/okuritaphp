<div class="col-lg-3 col-md-3">
    <aside class="aside-policy pt-5">
        <h5 class="mb-2"><i class="fas fa-user me-2"></i> Personal Information</h5>
        <div class="list-group mb-4">
            <a href="{{ url("mypage/profile") }}" class="list-group-item {{ (request()->segment(2)=="profile")?"active":"" }}">Profile </a>
            <a href="{{ url("mypage/email") }}" class="list-group-item {{ (request()->segment(2)=="email")?"active":"" }}">Change Email</a>
            <a href="{{ url("mypage/password") }}" class="list-group-item {{ (request()->segment(2)=="password")?"active":"" }}">Change Password</a>
            <a href="#" class="list-group-item">Privacy</a>
        </div>
        <h5 class="mb-2"><i class="fas fa-boxes me-2"></i> Order</h5>
        <div class="list-group mb-4">
            <a href="#" class="list-group-item {{ (request()->segment(2)=="order")?"active":"" }}">All Transaction</a>
            <a href="#" class="list-group-item {{ (request()->segment(2)=="wait")?"active":"" }}">Waiting Payment</a>
            <a href="#" class="list-group-item {{ (request()->segment(2)=="packing")?"active":"" }}">Packed</a>
            <a href="#" class="list-group-item {{ (request()->segment(2)=="shipping")?"active":"" }}">On Shipping</a>
            <a href="#" class="list-group-item {{ (request()->segment(2)=="completed")?"active":"" }}">Completed</a>
            <a href="#" class="list-group-item {{ (request()->segment(2)=="canceled")?"active":"" }}">Canceled</a>
        </div>
        <h5 class="mb-2"><i class="fas fa-ship me-2"></i>Auction</h5>
        <div class="list-group mb-4">
            <a href="#" class="list-group-item">On Going</a>
            <a href="#" class="list-group-item">Won</a>
            <a href="#" class="list-group-item">Watchlist</a>
        </div>
    </aside>
</div>