<ul class="{{ $isChild === true ? 'dropdown-menu' : 'nav nav-pills' }}" id="mainNav">
    @foreach($navNodes as $node)
        @php
            $isNavItemActive = is_nav_item_active(
                $node,
                $node->type,
                $node->related_id
            );
        @endphp
        <li class="{{ $node->children && $node->children->count() > 0 ? 'dropdown ' : '' }}{{ $isNavItemActive ? 'active' : '' }}">
            <a href="{{ url($node->url) }}.html"
               class="{{ $node->children && $node->children->count() > 0 ? 'dropdown-toggle ' : '' }}"
               @if($node->target) target="{{ $node->target }}" @endif>
                {{ $node->title }}
            </a>
            @if(!$node->children->isEmpty())
                @include('porto::partials.nav', [
                    'navNodes' => $node->children,
                    'isChild' => true
                ])
            @endif
        </li>
    @endforeach
</ul>