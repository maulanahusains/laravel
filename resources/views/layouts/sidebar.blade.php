<ul id="sidebarnav">
    <li>
        <a href="/dashboard" class="waves-effect"><i class="fa fa-clock-o m-r-10" aria-hidden="true"></i>Dashboard</a>
    </li>
    
    @if(Auth()->User()->level == 'Kasir' || Auth()->User()->level == 'Admin')
    <li>
        <a href="/penjualan" class="waves-effect"><i class="fa fa-user m-r-10" aria-hidden="true"></i>Kelola Data Penjualan</a>
    </li>
    @endif
    
    @if(Auth()->User()->level == 'Admin')
    <li>
        <a href="/user" class="waves-effect"><i class="fa fa-user m-r-10" aria-hidden="true"></i>Kelola Data User</a>
    </li>
    <li>
        <a href="/member" class="waves-effect"><i class="fa fa-user m-r-10" aria-hidden="true"></i>Kelola Data Member</a>
    </li>
    <li>
        <a href="/supplier" class="waves-effect"><i class="fa fa-user m-r-10" aria-hidden="true"></i>Kelola Data Supplier</a>
    </li>
    <li>
        <a href="/sepatu" class="waves-effect"><i class="fa fa-user m-r-10" aria-hidden="true"></i>Kelola Data Sepatu</a>
    </li>
    @endif
</ul>
