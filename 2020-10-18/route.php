// Venue Route
    $routes->group('venue', function ($routes) {
        // http://host.local/admin/venue/parameter
        $routes->get('/', 'Venue::index', ['as' => 'venue-index']);
        $routes->get('create', 'Venue::create', ['as' => 'venue-create']);
        $routes->post('create', 'Venue::store');
        $routes->get('create/room', 'Venue::roomCreate', ['as' => 'venue-room-create']);
        $routes->post('create/room', 'Venue::roomStore');
        $routes->get('detail/(:num)', 'Venue::show/$1', ['as' => 'venue-show']);
        $routes->get('editables', 'Venue::editable', ['as' => 'venue-editable']);
        $routes->get('edit/(:num)', 'Venue::edit/$1', ['as' => 'venue-edit']);
        $routes->get('edit/(:num)/info', 'Venue::editVenue/$1', ['as' => 'venue-edit-info']);
        $routes->post('edit/(:num)/info', 'Venue::update/$1');
        $routes->get('delete/(:num)', 'Venue::delete/$1', ['as' => 'venue-delete']);
        $routes->get('delete', 'Venue::expired', ['as' => 'venue-expired']);
    });
