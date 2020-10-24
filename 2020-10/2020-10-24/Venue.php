<?php namespace Bcsir\Controllers;

use App\Controllers\InitController;
use Bcsir\Models\HallModel;
use Bcsir\Models\RoomModel;
use Bcsir\Models\VenueModel;
use CodeIgniter\HTTP\RedirectResponse;

/**
 * @author F001
 *
 * @package Bcsir\Controllers
 * @class Venue
 * @extends InitController
 */
class Venue extends InitController
{

    /// @var VenueModel
    protected $venue;

    /// @var HallModel
    protected $hall;

    /// @var RoomModle
    protected $room;

    /**
     * Venue Construct
     */
    public function __construct()
    {
        $this->venue = new VenueModel();
        $this->hall = new HallModel();
        $this->room = new RoomModel();
    }

    /**
     * Displays All Active Venue
     * 
     * @return view Bcsir\Views\Venue\Active
     * @return mixed $venue
     */
    public function index()
    {
        $venues = $this->venue->getAllVenueInfo();

        return view('Bcsir\Views\Venue\Active', [
            'venues' => $venues,
        ]);
    }

    /**
     * Display All Editable VenueInfo
     * 
     * @return view Bcsir\Views\Venue\Editable
     * @return mixed $venues
     */
    public function editable()
    {
        $venues = $this->venue->getAllVenueInfo();

        return view('Bcsir\Views\Venue\Editable', [
            'venues' => $venues,
        ]);
    }

    /**
     * @return string
     */
    public function expired()
    {
        $venues = $this->venue->findAll();

        return view('Bcsir\Views\Venue\Expired', [
            'venues' => $venues,
        ]);
    }

    /**
     * Displays the Venue Creation Form
     * 
     * @return view Bcsir\Views\Venue\Create
     */
    public function create()
    {
        return view('Bcsir\Views\Venue\Create');
    }

    /**
     * Store Vanue & Halls
     *
     * @return redirect back()
     */
    public function store()
    {
        $venueInfo = [
            'name' => $this->request->getPost('name', FILTER_SANITIZE_STRING),
            'contact' => $this->request->getPost('contact', FILTER_SANITIZE_STRING),
            'authority' => $this->request->getPost('authority', FILTER_SANITIZE_STRING),
            'office_key' => $this->request->getPost('office_key', FILTER_SANITIZE_STRING),
            'description' => $this->request->getPost('body', FILTER_SANITIZE_STRING),
        ];

        $number_of_halls = $this->request->getPost('number_of_halls', FILTER_SANITIZE_NUMBER_INT);

        /**
         * * Insert Venue Information
         * ! If Venue Inserted Successful Then Insert $HallInfo
         */
        if ($this->venue->insert($venueInfo)) {

            $hallInsert = TRUE;
            for ($loop = 1; $loop <= $number_of_halls; $loop++) {

                $hallInfo = [
                    'name' => $this->request->getPost('hall_name' . $loop, FILTER_SANITIZE_STRING),
                    'address' => $this->request->getPost('hall_address' . $loop, FILTER_SANITIZE_STRING),
                    'venue_id' => $this->venue->getInsertID(),
                ];
                
                if (!$this->hall->insert($hallInfo)) $hallInsert = FALSE;
            }

            if ($hallInsert) {
                notify('New Venue created successfully.', 'info', 'Notification');
                return redirect()->back();
            }
        }
        notify('Something Went Wrong!!!', 'error', 'Alert!');
        return redirect()->back();
    }

    /**
     * Show Room Creation Form
     *
     * @return view Bcsir\Views\Venue\RoomCreate
     * @return mixed $halls
     */
    public function roomCreate()
    {
        $halls = $this->hall->getHallsList();

        return view('Bcsir\Views\Venue\RoomCreate', [
            'halls' => $halls,
        ]);
    }

    /**
     * Store Hall Rooms
     *
     * @return redirect back()
     */
    public function roomStore()
    {
        $numRoom = $this->request->getPost('num_room', FILTER_SANITIZE_NUMBER_INT);

        $roomInsert = TRUE;
        $count = 1;
        for ($count; $count <= $numRoom; $count++) {
            $roomInfo = [
                'name' => $this->request->getPost('name' . $count, FILTER_SANITIZE_STRING),
                'num_of_seats' => $this->request->getPost('seats' . $count, FILTER_SANITIZE_NUMBER_INT),
                'hall_id' => $this->request->getPost('hall_id', FILTER_SANITIZE_NUMBER_INT),
            ];

            if (!$this->room->insert($roomInfo)) $roomInsert = FALSE;
        }

        if ($roomInsert) {
            notify('New Hall / Building Rooms created successfully.', 'info', 'Notification');
            return redirect()->back();
        }
        notify('Something Went Wrong!!!', 'error', 'Alert!');
        return redirect()->back();
    }

    /**
     * Handles the GET request to display the object.
     *
     * @param int $id
     * @return view Bcsir\Views\Venue\Show
     * @return mixed $venue
     * @return mixed $halls
     * @return RedirectResponse
     */
    public function show(int $id)
    {
        $venue = $this->venue->find($id);
        $halls = $this->hall->getHallsDetail($id);

        if (is_null($venue)) {
            return redirect()->back()->withInput()->with('error', 'Object not found');
        }

        return view('Bcsir\Views\Venue\Show', [
            'venue' => $venue,
            'halls' => $halls,
        ]);
    }

    /**
     * Display Modification From with Editable Data
     *
     * @param integer $id
     * @return view Bcsir\Views\Venue\Edit
     * @return mixed $venue
     */
    public function edit(int $id)
    {
        $venue = $this->venue->find($id);
        $halls = $this->hall->where("venue_id", $id)->findAll();
        $rooms = $this->room->findAll();
        
        return view('Bcsir\Views\Venue\Edit', [
            'venue' => $venue,
            'halls' => $halls,
            'rooms' => $rooms,
        ]);
    }

    public function editVenue(int $id)
    {
        $venue = $this->venue->find($id);
        
        return view('Bcsir\Views\Venue\EditVenue', [
            'venue' => $venue,
        ]);
    }

    public function update(int $id)
    {
        $venueInfo = [
            'name' => $this->request->getPost('name', FILTER_SANITIZE_STRING),
            'contact' => $this->request->getPost('contact', FILTER_SANITIZE_STRING),
            'authority' => $this->request->getPost('authority', FILTER_SANITIZE_STRING),
            'office_key' => $this->request->getPost('office_key', FILTER_SANITIZE_STRING),
            'description' => $this->request->getPost('body', FILTER_SANITIZE_STRING),
        ];

        /// Update Venue Information
        if($this->venue->update($id, $venueInfo)){
            notify('Venue updated successfully.', 'info', 'Notification');
            return redirect()->to(route_to("venue-edit", $id));
        }
        notify('Something Went Wrong!!!', 'error', 'Alert!');
        return redirect()->back();
    }

    /**
     * Handles the POST request to delete an existing object.
     *
     * @param int
     *
     * @return RedirectResponse
     */
    public function delete(int $id)
    {
        // Try to delete, or flash the messages.
        if (!$this->model->delete($id)) {
            session()->setFlashdata('error', $this->model->errors());
        }

        return redirect('Bcsir\Venue::listAll');
    }
}
