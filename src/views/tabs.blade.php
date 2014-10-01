<?php $class = "active"; ?>
<ul class="nav nav-{{$type}} {{$direction}}">

    @foreach ($tabs as $tab)
    <?php if ((!isset($only)) || (isset($only) && in_array($tab['tab'],$only))):  ?>

        @if (!isset($tab['subtabs']))
              @include('tabs::menu-tab')
        @else
             @include('tabs::menu-subtabs')

        @endif
<?php
$class="";
endif; ?>
    @endforeach

</ul>

<?php $class = $fade?"active in":"active";  ?>
<div class="tab-content">
    @foreach ($tabs as $tab)
 <?php if ((!isset($only)) || (isset($only) && in_array($tab['tab'],$only))):  ?>
    @if (!isset($tab['subtabs']))
        @include('tabs::tab-content',['tab'=>$tab['tab']])
    @else
        @foreach ($tab['subtabs'] as $subtab)
            @include('tabs::tab-content',['tab'=>$subtab])
        @endforeach
    @endif
  <?php $class = "";
   endif; ?>
    @endforeach
</div>