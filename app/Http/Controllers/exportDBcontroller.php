<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\authors;
use App\books;
use App\booksCategory;
use App\booksIssued;
use App\booksReturned;
use App\member;
use App\memStaff;
use App\memStudent;
use App\thesis;
use App\User;


class exportDBcontroller extends Controller
{
    //  
    /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
    public function create()
    {
        return view('exportDB');
    }
    public function storeexcel()
    {  
        $spreadsheet = new Spreadsheet();
        $sheet0=new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'authors');
        $sheet1=new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'books');
        $sheet2=new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'bookscatagory');
        $sheet3=new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'booksissued');
        $sheet4=new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'booksreturned');
        $sheet5=new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'member');
        $sheet6=new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'memstaff');
        $sheet7=new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'memstudent');
        $sheet8=new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'thesis');
        $sheet9=new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'User');
        
        //authors
        $authors=authors::all();
        $authorsdata=[];
        $authorsdata[]=['authId','name','noOfBooksAvail','created_at','updated_at'];
        foreach ($authors as $author) {
            $authorsdata[]=$author->toArray();
        }
        $sheet0->fromArray($authorsdata,null,'A1');
        //books
        $books=books::all();
        $bookdata=[];
        $bookdata[]=['created_at','updated_at','bookid','bookTitle','edition','authid','catid','totalAvail','totallss'];
        foreach ($books as $book) {
            $bookdata[]=$book->toArray();
        }
        $sheet1->fromArray($bookdata,null,'A1');
        
        //book cat
        $bookcats=booksCategory::all();
        $bookcatdata=[];
        $bookcatdata[]=['catId','catName'];
        foreach ($bookcats as $bookcat) {
            $bookcatdata[]=$bookcat->toArray();
        }
        $sheet2->fromArray($bookcatdata,null,'A1');
        
        
        //book issued
        $bookisss=booksIssued::all();
        $bookissdata=[];
        $bookissdata[]=['issueId','issueDate','retDate','bookId','memId'];
        foreach ($bookisss as $bookiss) {
            $bookissdata[]=$bookiss->toArray();
        }
        $sheet3->fromArray($bookissdata,null,'A1');
        
        
        //books returned
        $bookrets=booksReturned::all();
        $bookretdata=[];
        $bookretdata[]=['returnId','retDate','bookId','memId'];
        foreach ($bookrets as $bookret) {
            $bookretdata[]=$bookret->toArray();
        }
        $sheet4->fromArray($bookretdata,null,'A1');
        
        
        //members
        $members=member::all();
        $membersdata=[];
        $membersdata[]=['memId','created_at','updated_at','memName','email','contact','cnic','address','dept','memtype','password','regNo','picLink'];
        foreach ($members as $member) {
            $membersdata[]=$member->toArray();
        }
        $sheet5->fromArray($membersdata,null,'A1');
        
        
        //mem staffs
        $memstaffs=memStaff::all();
        $memstaffdata=[];
        $memstaffdata[]=['memId','designation'];
        foreach ($memstaffs as $memstaff) {
            $memstaffdata[]=$memstaff->toArray();
        }
        $sheet6->fromArray($memstaffdata,null,'A1');
        
        
        //mem students
        $memstuds=memStudent::all();
        $memstuddata=[];
        $memstuddata[]=['memId','regNo','batch'];
        foreach ($memstuds as $memstud) {
            $memstuddata[]=$memstud->toArray();
        }
        $sheet7->fromArray($memstuddata,null,'A1');
        
        
        //thesis
        $thesiss=thesis::all();
        $thesissdata=[];
        $thesissdata[]=['thesisId','thesisTitle','mem1Id','mem2Id','mem3Id','supName'];
        foreach ($thesiss as $thesis) {
            $thesissdata[]=$thesis->toArray();
        }
        $sheet8->fromArray($thesissdata,null,'A1');
        
        
        //users
        $users=User::all();
        $usersdata=[];
        $usersdata[]=['id','name','email','created_at','updated_at'];
        foreach ($users as $user) {
            $usersdata[]=$user->toArray();
        }
        $sheet9->fromArray($usersdata,null,'A1');

        

        //add all sheets to the workbook
        $spreadsheet->addSheet($sheet0);
        $spreadsheet->addSheet($sheet1);
        $spreadsheet->addSheet($sheet2);
        $spreadsheet->addSheet($sheet3);
        $spreadsheet->addSheet($sheet4);
        $spreadsheet->addSheet($sheet5);
        $spreadsheet->addSheet($sheet6);
        $spreadsheet->addSheet($sheet7);
        $spreadsheet->addSheet($sheet8);
        $spreadsheet->addSheet($sheet9);
        //creats the xlsx file and displays the download link to the user
        $writer = new Xlsx($spreadsheet);
        $writer->save('database.xlsx');
        return '<a href="/database.xlsx">Download</a>';
        
    }
}
