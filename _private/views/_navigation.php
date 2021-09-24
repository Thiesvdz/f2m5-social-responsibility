<ul>
    <li>
        <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>>Home</a>
        <a href="<?php echo url( 'admin' ) ?>"<?php if ( current_route_is( 'index' ) ): ?> class="active"<?php endif ?>>Aanmelden</a>

    </li>
</ul>