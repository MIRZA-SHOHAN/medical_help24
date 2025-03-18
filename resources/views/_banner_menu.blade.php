<style>
.banner_menu {
  display: flex;
  justify-content: center;
}
</style>
<div class="banner_menu">
    <ul class="slider_menu_area">							
    @php
        $action = explode(',', $posts[0]->link_action)
    @endphp						
    @if ($links = explode(',', $posts[0]->link_title))							
        @foreach ($links as $item)
        <li class="slider_menu{{$loop->iteration}}">
            <a href="{{$action[$loop->iteration-1]}}" class="action_link1">{{$item}}</a>
        </li>	
        @endforeach 
    @endif		 
    </ul>	
</div>
