<!-- @if(\Illuminate\Support\Facades\Auth::check())
    @php
        $id = \Illuminate\Support\Facades\Auth::user()->id;
        $vendorId = App\Models\User::find($id);
        $status = $vendorId->status;
    @endphp
@endif -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('adminbackend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Association</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li>
            <a href="">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <!-- @if($status === 'active') -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Evenement</div>
            </a>
            <ul>
                <li> <a href=""><i class="bx bx-right-arrow-alt"></i>Tout les Evenement</a>
                </li>
                <li> <a href=""><i class="bx bx-right-arrow-alt"></i>Ajouter Evenement</a>
                </li>


            </ul>
        </li>
       

           


            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="lni lni-indent-increase"></i>
                    </div>
                    <div class="menu-title">Commentaires & avis </div>
                </a>
                <ul>
                    <li> <a href=""><i class="bx bx-right-arrow-alt"></i>Tout les commentaires</a>
                    </li>



                </ul>
            </li>

        @else
        @endif








        


    </ul>
    <!--end navigation-->
</div>
