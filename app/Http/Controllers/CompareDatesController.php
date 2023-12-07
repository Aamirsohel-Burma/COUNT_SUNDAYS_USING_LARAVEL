<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompareDatesController extends Controller
{
    public function compareDates(Request $request)
    {   
        
        $validator = Validator::make($request->all(), [
            'startDate' => 'required|date_format:d-m-Y|before_or_equal:endDate',
            'endDate'   => 'required|date_format:d-m-Y',
        ], [
            'startDate.before_or_equal' => 'start date not be greater than end date'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'errors'   => $validator->errors()
            ], 422);
        }
        $startDate = Carbon::createFromFormat('d-m-Y', $request->startDate);
        $endDate   = Carbon::createFromFormat('d-m-Y', $request->endDate);

        // Additional custom validation rules
        $validator->after(function ($validator) use ($request, $startDate, $endDate) {

            // Check if the start date is not a Sunday
            if ($startDate->dayOfWeek == Carbon::SUNDAY) {
                $validator->errors()->add('startDate', 'The start date cannot be a Sunday.');
            } else if ($startDate->diffInYears($endDate) < 2) {
                $validator->errors()->add('endDate', 'The end date must be at least two years after the start date.');
            } else if ($startDate->diffInYears($endDate) > 5) {
                $validator->errors()->add('endDate', 'The end date not more than five years after the start date.');
            }
        });

        if ($validator->fails()) {
            return response()->json([
                'errors'   => $validator->errors()
            ], 422);
        }

        // INITIALIZE A COUNTER FOR SUNDAYS
        $sundaysCount = 0;

        // LOOP THROUGH EACH DAY AND CHECK IF IT'S A SUNDAY
        while ($startDate->lte($endDate)) {
            // SKIP SUNDAY THAT FALLS AFTER 28TH DAY OF EVERY MONTH
            if ($startDate->dayOfWeek == Carbon::SUNDAY && $startDate->day <= 28) {
                $sundaysCount++;
            }

            // Move to the next day
            $startDate->addDay();
        }

        return response()->json([
            'message'   => "Number of Sundays between {$startDate->toDateString()} and {$endDate->toDateString()} : {$sundaysCount}"
        ]);
    }
}
