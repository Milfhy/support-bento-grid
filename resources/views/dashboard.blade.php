<?php
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "milfhy_login";

$koneksi = mysqli_connect($servername, $user, $password, $dbname) or die(mysqli_error($koneksi));
$uid = Auth::user()->id ;


?>
<x-app-layout>
    
<div class="grid-container" >
<div class="grid-item Profile">
<div class="container">
          <div class="flex items-center justify-center p-2">
          <x-ri-profile-fill class="h-8 w-8" color="magenta" />
            <span style=" fontSize: 15px; fontWeight:bold ">
              Profile
            </span>
          </div>
          <p
            style="fontSize: 20px; marginTop: -20px; fontWeight: bold "
          >
            Welcome 
          </p>
        </div>

        <div class="container rounded-md" style="background-color: rgb(39 39 42)">
      <div class="flex items-center justify-left  p-2">
      <x-ri-user-6-fill class="h-8 w-8 rounded-md" color="rgb(153, 153, 153)" style="background-color: rgb(63 63 70);" />
        <span style="margin-left: 10px; fontSize: 15px; fontWeight:bold ">
        Name : {{ Auth::user()->name }}
        </span></div>
        <div class="flex items-center justify-left p-2">
        <x-ri-phone-fill  class="h-8 w-8 rounded-md" color="rgb(153, 153, 153)" style="background-color: rgb(63 63 70);"/>
        <span style="margin-left: 10px; fontSize: 15px; fontWeight:bold ">
        Phone : {{ Auth::user()->phone }}
        </span></div>
        <div class="flex items-center justify-left p-2">
        <x-gmdi-email-r  class="h-8 w-8 rounded-md" color="rgb(153, 153, 153)" style="background-color: rgb(63 63 70);"/>
        <span style="margin-left: 10px; fontSize: 15px; fontWeight:bold ">
        Email : {{ Auth::user()->email }}
        </span></div>
</div>


<div class="flex items-center gap-4" >
<x-dropdown-link :href="route('profile.edit')" style="color: white; background-color: magenta; font-weight: bold; margin-top: 10px" class="rounded-md text-center">
                            {{ __('Edit Profile') }}
                        </x-dropdown-link>

        </div>

  <form method="POST" action="{{ route('logout') }}">
                    @csrf
  <x-responsive-nav-link :href="route('logout')" class="hidden"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')" style="color: white; background-color: #dc3545; font-weight: bold; margin-top: 10px" class="rounded-md text-center"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>

<div>

</div>
</div>
<div class="grid-item Call">
<div class="container">
<div class="flex items-center justify-center p-2">
<x-gmdi-call class="h-8 w-8" color="magenta" />
            <span style=" fontSize: 15px; fontWeight:bold ">
              Make Call Schedule
            </span>
          </div>
          <p
            style="fontSize: 20px; marginTop: -20px; fontWeight: bold "
          >
            Make call before make order!
          </p>
        </div>
        <form method="POST" action="{{ route('call.save') }}">
    @csrf
        <div class="mb-3">
    <label class="form-label">Subject</label>
    <select  name="csubject" class="form-select" style="color: white; background-color: rgb(39 39 42)">
  <option style="color: white">Select</option>
  <option value="Web Design" style="color: white">Web Design</option>
  <option value="Web Development" style="color: white">Web Development</option>
  <option value="Game App" style="color: white">Game App</option>
  <option value="Desktop App" style="color: white">Desktop App</option>
  <option value="Mobile App" style="color: white">Mobile App</option>
  <option value="SEO Optimization" style="color: white">SEO Optimization</option>
</select>
</div>
<div class="mb-3">
<label class="form-label">Date</label>
<input type="date" name="cdate" class="form-control"  style="color: white; background-color: rgb(39 39 42)">
  </div>
  <button type="submit" class="btn mb-2" name="csave" style="color: white; background-color: magenta; font-weight: bold;">Save</button>
  <button type="reset" class="btn btn-danger mb-2" name="creset">Reset</button>
</form>
</div>
<div class="grid-item Order">
    <div class="container">
<div class="flex items-center justify-center p-2">
<x-ri-list-ordered-2 class="h-8 w-8" color="magenta" />
            <span style=" fontSize: 15px; fontWeight:bold ">
              Make Order
            </span>
          </div>
          <p
            style="fontSize: 20px; marginTop: -20px; fontWeight: bold "
          >
            Make order went you already have call with us!
          </p>
        </div>
        <form method="POST" action="{{ route('order.save') }}">
    @csrf
        <div class="mb-3">
    <label class="form-label">Subject</label>
    <select class="form-select" style="color: white; background-color: rgb(39 39 42)" name="osubject">
    <option style="color: white">Select</option>
  <option value="Web Design" style="color: white">Web Design</option>
  <option value="Web Development" style="color: white">Web Development</option>
  <option value="Game App" style="color: white">Game App</option>
  <option value="Desktop App" style="color: white">Desktop App</option>
  <option value="Mobile App" style="color: white">Mobile App</option>
  <option value="SEO Optimization" style="color: white">SEO Optimization</option>
</select>
</div>
<div class="mb-3">
<label class="form-label">Date</label>
<input type="date" class="form-control" name="odate" style="color: white; background-color: rgb(39 39 42)">
  </div>
  <button type="submit" class="btn mb-2" name="osave" style="color: white; background-color: magenta; font-weight: bold;">Save</button>
  <button type="reset" class="btn btn-danger mb-2" name="oreset">Reset</button>
</form>
</div>
<div class="grid-item CallS">
<div class="container">
          <div class="flex items-center justify-center p-2">
          <x-gmdi-call-to-action-r class="h-8 w-8" color="magenta" />
            <span style=" fontSize: 15px; fontWeight:bold ">
              Call Schedule
            </span>
          </div>
          <p
            style="fontSize: 20px; marginTop: -20px; fontWeight: bold "
          >
            Here your call schedule 
          </p>
        </div>
        <div class="flex items-center gap-4" >
        <table class="table table-striped table-dark" style="background-color: rgb(39 39 42)">
     
        <tr>
        <th>No</th>
        <th>Subject</th>
        <th>Date</th>

</tr>

<?php
$id = Auth::user()->id ;
$no = 1;
$tampil = mysqli_query($koneksi, "SELECT * FROM scall WHERE uid = '$id'");
while ($data = mysqli_fetch_array($tampil)) :

?>
<tr>
  <td><?=$no++ ?></td>
  <td><?=$data['subject'] ?></td>
  <td><?=$data['date'] ?></td>
</tr>

<?php endwhile; ?>
      </table>
      </div>      
</div>
<div class="grid-item OrderS">
<div class="container">
          <div class="flex items-center justify-center p-2">
          <x-ri-calendar-schedule-fill class="h-8 w-8" color="magenta" />
            <span style=" fontSize: 15px; fontWeight:bold ">
              Order Schedule
            </span>
          </div>
          <p
            style="fontSize: 20px; marginTop: -20px; fontWeight: bold "
          >
            Here your order schedule 
          </p>
        </div>
        <div class="flex items-center gap-4" >
        <table class="table table-striped table-dark" style="background-color: rgb(39 39 42)">
     
        <tr>
        <th>No</th>
        <th>Service</th>
        <th>Date</th>

</tr>

<?php
$ids = Auth::user()->id ;
$nos = 1;
$tampils = mysqli_query($koneksi, "SELECT * FROM sorder WHERE uid = '$ids'");
while ($datas = mysqli_fetch_array($tampils)) :

?>
<tr>
  <td><?=$nos++ ?></td>
  <td><?=$datas['subject'] ?></td>
  <td><?=$datas['date'] ?></td>
</tr>

<?php endwhile; ?>
      </table>
      </div>      
</div>
</div>
<style>

.grid-container {
  min-height: 95vh;
  flex-wrap: nowrap;
  display: grid;
  grid-auto-columns: 1fr;
  grid-auto-rows: 1fr;
  gap: 0.5rem;
  grid-template-areas:
    "1  2   3"
    "4  5"
}

.grid-item {
  background-color: rgb(25, 25, 25);
  padding: 0.4rem 0.4rem;
  text-align: center;
  display: flex;
  flex-direction: column;
  border-radius: 0.4rem;
  overflow: hidden;
  transition: all 200m ease;
}

.Profile {
  grid-area: 1;
  grid-row: 1/7;
  grid-column: 1/5;
}

.Call {
  grid-area: 2;
  grid-row: 1/7;
  grid-column: 5/9;
}

.Order {
  grid-area: 3;
  grid-row: 1/7;
  grid-column: 9/13;
}
.CallS {
  grid-area: 4;
  grid-row: 7/13;
  grid-column: 1/7;
}

.OrderS {
  grid-area: 5;
  grid-row: 7/13;
  grid-column: 7/13;
}
@media (max-width: 1280px) {

    .grid-container {
  min-height: 100vh;
  flex-wrap: nowrap;
  display: grid;
  grid-auto-columns: 1fr;
  grid-auto-rows: 1fr;
  gap: 0.5rem;
  grid-template-areas:
    "1"
    "2  3"
    "4"
    "5"
}
.grid-item {
  background-color: rgb(25, 25, 25);
  padding: 0.4rem 0.4rem;
  text-align: center;
  display: flex;
  flex-direction: column;
  border-radius: 0.4rem;
  overflow: hidden;
  transition: all 200m ease;
}
.Profile {
  grid-area: 1;
  grid-row: 1/7;
  grid-column: 1/13;
}

    .Call {
    grid-area: 2;
    grid-row: 7/13;
    grid-column: 1/7;
    }

    .Order {
    grid-area: 3;
    grid-row: 7/13;
    grid-column: 7/13;
    }
    .CallS {
    grid-area: 4;
    grid-row: 13/19;
    grid-column: 1/13;
    }

    .OrderS {
    grid-area: 5;
    grid-row: 19/25;
    grid-column: 1/13;
    }


}
@media (max-width: 810px) {

    .grid-container {
  min-height: 100vh;
  flex-wrap: nowrap;
  display: grid;
  grid-auto-columns: 1fr;
  grid-auto-rows: 1fr;
  gap: 0.5rem;
  grid-template-areas:
    "1"
    "2"
    "3"
    "4"
    "5"
}
.grid-item {
  background-color: rgb(25, 25, 25);
  padding: 0.4rem 0.4rem;
  text-align: center;
  display: flex;
  flex-direction: column;
  border-radius: 0.4rem;
  overflow: hidden;
  transition: all 200m ease;
}

    .Profile {
  grid-area: 1;
  grid-row: 1/7;
  grid-column: 1/13;
}

    .Call {
    grid-area: 2;
    grid-row: 7/13;
    grid-column: 1/13;
    }

    .Order {
    grid-area: 3;
    grid-row: 13/19;
    grid-column: 1/13;
    }
    .CallS {
    grid-area: 4;
    grid-row: 19/25;
    grid-column: 1/13;
    }

    .OrderS {
    grid-area: 5;
    grid-row: 25/31;
    grid-column: 1/13;
    }
}
</style>

</x-app-layout>
