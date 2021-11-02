<ul>
    <li>
        <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>>Home</a>
        <a href="<?php echo url( 'register_form' ) ?>"<?php if ( current_route_is( 'index' ) ): ?> class="active"<?php endif ?>>Aanmelden</a>
        <a href="<?php echo url( 'blog.detail' ) ?>"<?php if ( current_route_is( 'index' ) ): ?> class="active"<?php endif ?>>Blog</a>
    </li>
</ul>