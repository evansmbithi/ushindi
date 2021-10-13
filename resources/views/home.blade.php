@extends('layouts.main')

@section('content')
    
    <div class="home-cards">

      <div class="shortcut-group">
        <a href="/save" class="shortcuts"><span class="las la-wallet"></span><div>Quick Save</div></a>
        <a href="/loans" class="shortcuts"><span class="las la-credit-card"></span><div>Apply Loan</div></a>
        <a href="/dividends" class="shortcuts"><span class="las la-arrow-circle-down"></span><div>Withdraw</div></a>
        <a href="#" class="shortcuts"><span class="las la-plus-square"></span><div>More</div></a>
      </div>

      <div class="savings">
        <div class="card-content">
          <h3>Total Savings</h3>
          <p><sup>Ksh</sup> <span>10,000</span></p>
        </div>
        
      </div>

      <div class="withdrawal">
        <div class="card-content">
          <h3>Total Withrawn</h3>
          <p><sup>Ksh</sup> <span>0.00</span></p>
        </div>
        
      </div>

      <div class="pending">
        <div class="card-content">
          <h3>Pending Loan</h3>
          <p><sup>Ksh</sup> <span>0.00</span></p>
        </div>
      </div>

      <div class="recents">
        <div class="recent-header">
          <h3>Recent Activity</h3>
        </div>
        <div class="recent-item">
          <div class="icon">
            <span class="las la-wallet"></span>
          </div>
          <div class="name">
            Savings
          </div>
          <div class="date">
            28 Oct 2021
          </div>
          <div class="amount">
            Ksh 200
          </div>
        </div>

        <div class="recent-item">
          <div class="icon">
            <span class="las la-wallet"></span>
          </div>
          <div class="name">
            Savings
          </div>
          <div class="date">
            28 Oct 2021
          </div>
          <div class="amount">
            Ksh 200
          </div>
        </div>

        <div class="recent-item">
          <div class="icon">
            <span class="las la-wallet"></span>
          </div>
          <div class="name">
            Savings
          </div>
          <div class="date">
            28 Oct 2021
          </div>
          <div class="amount">
            Ksh 200
          </div>
        </div>

        <div class="recent-item">
          <div class="icon">
            <span class="las la-wallet"></span>
          </div>
          <div class="name">
            Savings
          </div>
          <div class="date">
            28 Oct 2021
          </div>
          <div class="amount">
            Ksh 200
          </div>
        </div>

        <div class="recent-item">
          <div class="icon">
            <span class="las la-wallet"></span>
          </div>
          <div class="name">
            Savings
          </div>
          <div class="date">
            28 Oct 2021
          </div>
          <div class="amount">
            Ksh 200
          </div>
        </div>

      </div>
      
      <div class="overview">
        <div class="overview-header">
          Savings Trend
        </div>
        <div>
          <img src="https://d3fy651gv2fhd3.cloudfront.net/charts/united-kingdom-personal-savings.png?s=unitedkinpersav&v=202107160707V20200908&ismobile=1&w=400&h=250&lbl=0" alt="">
        </div>
      </div>      
    </div>

@endsection
