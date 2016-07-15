/**
 * Created by jidesakin on 7/14/16.
 */
$(document).ready(function(){

    // Attendance data table
    $('#attendanceTable').dataTable();
    
    



});


function checkIn(memberId)
{

    $.post('/event')
    console.log("Check in!" + memberId);
}