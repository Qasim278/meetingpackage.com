<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\HotelsChannel;
use App\Models\Hotels;
class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = DB::select("
    SELECT hotels.name AS hotelname,hotels.label AS hotellabel, hotels.id AS hotelid, channel.name AS channelname, channel.id AS channelid, hotels_channel.visibility
    FROM hotels hotels
    JOIN hotels_channel hotels_channel ON hotels.id = hotels_channel.hotel_id
    JOIN channel channel ON channel.id = hotels_channel.channel_id
    ORDER BY hotels.id, channel.id
");

$response = [];

foreach ($hotels as $hotel) {
    $found = false;

    // Check if the hotel already exists in the response array
    foreach ($response as &$item) {
        if ($item['hotelid'] == $hotel->hotelid) {
            $item['channels'][] = [
                'channelid' => $hotel->channelid,
                'channelname' => $hotel->channelname,
                'visibility' => $hotel->visibility
            ];
            $found = true;
            break;
        }
    }

    // If the hotel doesn't exist in the response array, add it
    if (!$found) {
        $response[] = [
            'hotelid' => $hotel->hotelid,
            'name' => $hotel->hotelname,
            'label' => $hotel->hotellabel,
            'channels' => [
                [
                    'channelid' => $hotel->channelid,
                    'channelname' => $hotel->channelname,
                    'visibility' => $hotel->visibility
                ]
            ]
        ];
    }
}

return response()->json($response);
        // $hotelChannels = DB::table('hotels_channel')
        // ->join('hotels', 'hotels.id', '=', 'hotels_channel.hotel_id')
        // ->join('channel', 'channel.id', '=', 'hotels_channel.hotel_id')
        // ->select('hotels_channel.*', 'hotels.name','hotels.label')
        // ->select('hotels_channel.*', 'channel.name')
        // ->get();
//         $hotelChannels = Hotels::with('channel')->get();
//     //  $query= HotelsChannel::all();
//    return response()->json(['Data'=>$hotelChannels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

    }
   public function update_visibility(Request $request)
   {

    $hotelId = $request->input('hotel_id');
        $channelId = $request->input('channel_id');
        $visibility = $request->input('visibility');


        $hotelChannel = HotelsChannel::where('hotel_id', $hotelId)
        ->where('channel_id', $channelId)
        ->update(['visibility' => $visibility]);
        $hotels = DB::select("
        SELECT hotels.name AS hotelname,hotels.label AS hotellabel, hotels.id AS hotelid, channel.name AS channelname, channel.id AS channelid, hotels_channel.visibility
        FROM hotels hotels
        JOIN hotels_channel hotels_channel ON hotels.id = hotels_channel.hotel_id
        JOIN channel channel ON channel.id = hotels_channel.channel_id
        ORDER BY hotels.id, channel.id
    ");

    $response = [];

    foreach ($hotels as $hotel) {
        $found = false;

        // Check if the hotel already exists in the response array
        foreach ($response as &$item) {
            if ($item['hotelid'] == $hotel->hotelid) {
                $item['channels'][] = [
                    'channelid' => $hotel->channelid,
                    'channelname' => $hotel->channelname,
                    'visibility' => $hotel->visibility
                ];
                $found = true;
                break;
            }
        }

        // If the hotel doesn't exist in the response array, add it
        if (!$found) {
            $response[] = [
                'hotelid' => $hotel->hotelid,
                'hotelname' => $hotel->hotelname,
                'hotellabel' => $hotel->hotellabel,
                'channels' => [
                    [
                        'channelid' => $hotel->channelid,
                        'channelname' => $hotel->channelname,
                        'visibility' => $hotel->visibility
                    ]
                ]
            ];
        }
    }

    return response()->json($response);
   }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
