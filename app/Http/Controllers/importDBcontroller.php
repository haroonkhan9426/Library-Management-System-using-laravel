<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
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

class importDBcontroller extends Controller
{
    /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
    public function create()
    {
        return view('importDB');
    }
    public function rutformatfile()
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
        $authorsdata=[];
        $authorsdata[]=['authId','name','noOfBooksAvail','created_at','updated_at'];
        $sheet0->fromArray($authorsdata,null,'A1');
        //books
        $bookdata=[];
        $bookdata[]=['bookid','bookTitle','edition','authid','catid','totalAvail','totalIss'];
        $sheet1->fromArray($bookdata,null,'A1');
        //bookcat
        $bookcatdata=[];
        $bookcatdata[]=['catId','catName'];
        $sheet2->fromArray($bookcatdata,null,'A1');
        //bookiss
        $bookissdata=[];
        $bookissdata[]=['issueId','issueDate','retDate','bookId','memId'];
        $sheet3->fromArray($bookissdata,null,'A1');
        //bookret
        $bookretdata=[];
        $bookretdata[]=['returnId','retDate','bookId','memId'];
        $sheet4->fromArray($bookretdata,null,'A1');
        //member
        $membersdata=[];
        $membersdata[]=['memId','memName','email','contact','cnic','address','dept','memtype','password','regNo'];
        $sheet5->fromArray($membersdata,null,'A1');
        //memstaff
        $memstaffdata=[];
        $memstaffdata[]=['memId','designation'];
        $sheet6->fromArray($memstaffdata,null,'A1');
        //memstudent
        $memstuddata=[];
        $memstuddata[]=['memId','regNo','batch'];
        $sheet7->fromArray($memstuddata,null,'A1');
        //thesis
        $thesissdata=[];
        $thesissdata[]=['thesisId','thesisTitle','mem1Id','mem2Id','mem3Id','supName'];
        $sheet8->fromArray($thesissdata,null,'A1');

        //user
        $usersdata=[];
        $usersdata[]=['id','name','email'];
        $sheet9->fromArray($usersdata,null,'A1');
        
        
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
    public function insertDBFfunc(Request $request)
    {
        //return 'test';
        //read file
        if($request->hasFile('importfile'))
        {
            //return '<h1>it has a file </h1>';
            $path=$request->file('importfile')->getRealPath();
            $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
            $reader->setReadDataOnly(TRUE);
            $spreadsheet = $reader->load($path);
            if(!empty($spreadsheet))
            {
                //member
                $spreadsheet->setActiveSheetIndexByName('member');
                $sheet=$spreadsheet->getActiveSheet();
                $highestRow = $sheet->getHighestRow(); // e.g. 10
                $highestColumn = $sheet->getHighestColumn(); // e.g 'F'
                $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); // e.g. 5
                for ($row = 2; $row <= $highestRow; ++$row) 
                {
                   $mem=new member();
                   $mem->memId=$sheet->getCellByColumnAndRow(1,$row)->getValue();
                   $mem->memName=$sheet->getCellByColumnAndRow(2,$row)->getValue();
                   $mem->email=$sheet->getCellByColumnAndRow(3,$row)->getValue();
                   $mem->contact=$sheet->getCellByColumnAndRow(4,$row)->getValue();
                   $mem->cnic=$sheet->getCellByColumnAndRow(5,$row)->getValue();
                   $mem->address=$sheet->getCellByColumnAndRow(6,$row)->getValue();
                   $mem->dept=$sheet->getCellByColumnAndRow(7,$row)->getValue();
                   $mem->memType=$sheet->getCellByColumnAndRow(8,$row)->getValue();
                   $mem->password=$sheet->getCellByColumnAndRow(9,$row)->getValue();
                   $mem->regNo=$sheet->getCellByColumnAndRow(10,$row)->getValue();
                   $mem->save();
                }

                //User
                $spreadsheet->setActiveSheetIndexByName('User');
                $sheet=$spreadsheet->getActiveSheet();
                $highestRow = $sheet->getHighestRow(); // e.g. 10
                $highestColumn = $sheet->getHighestColumn(); // e.g 'F'
                $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); // e.g. 5
                for ($row = 2; $row <= $highestRow; ++$row) {
                    $user=new User();
                    $user->id=$sheet->getCellByColumnAndRow(1,$row)->getValue();
                    $user->name=$sheet->getCellByColumnAndRow(2,$row)->getValue();
                    $user->email=$sheet->getCellByColumnAndRow(3,$row)->getValue();
                    $user->password=$sheet->getCellByColumnAndRow(4,$row)->getValue();
                    $user->save();
                }

                //memstaff
                $spreadsheet->setActiveSheetIndexByName('memstaff');
                $sheet=$spreadsheet->getActiveSheet();
                $highestRow = $sheet->getHighestRow(); // e.g. 10
                $highestColumn = $sheet->getHighestColumn(); // e.g 'F'
                $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); // e.g. 5
                for ($row = 2; $row <= $highestRow; ++$row) {
                    $memstaff=new memStaff();
                    $memstaff->memId=$sheet->getCellByColumnAndRow(1,$row)->getValue();
                    $memstaff->designation=$sheet->getCellByColumnAndRow(2,$row)->getValue();
                    $memstaff->save();
                }

                //memstudent
                $spreadsheet->setActiveSheetIndexByName('memstudent');
                $sheet=$spreadsheet->getActiveSheet();
                $highestRow = $sheet->getHighestRow(); // e.g. 10
                $highestColumn = $sheet->getHighestColumn(); // e.g 'F'
                $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); // e.g. 5
                for ($row = 2; $row <= $highestRow; ++$row) {
                    $memstud=new memStudent();
                    $memstud->memId=$sheet->getCellByColumnAndRow(1,$row)->getValue();
                    $memstud->regNo=$sheet->getCellByColumnAndRow(2,$row)->getValue();
                    $memstud->batch=$sheet->getCellByColumnAndRow(3,$row)->getValue();
                    $memstud->save();
                }


                //bookscatagory
                $spreadsheet->setActiveSheetIndexByName('bookscatagory');
                $sheet=$spreadsheet->getActiveSheet();
                $highestRow = $sheet->getHighestRow(); // e.g. 10
                $highestColumn = $sheet->getHighestColumn(); // e.g 'F'
                $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); // e.g. 5
                for ($row = 2; $row <= $highestRow; ++$row) {
                    $bookcat=new booksCategory();
                    $bookcat->catId=$sheet->getCellByColumnAndRow(1,$row)->getValue();
                    $bookcat->catName=$sheet->getCellByColumnAndRow(2,$row)->getValue();
                    $bookcat->save();
                }

                //thesis
                $spreadsheet->setActiveSheetIndexByName('thesis');
                $sheet=$spreadsheet->getActiveSheet();
                $highestRow = $sheet->getHighestRow(); // e.g. 10
                $highestColumn = $sheet->getHighestColumn(); // e.g 'F'
                $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); // e.g. 5
                for ($row = 2; $row <= $highestRow; ++$row) {
                    $thesis=new thesis();
                    $thesis->thesisId=$sheet->getCellByColumnAndRow(1,$row)->getValue();
                    $thesis->thesisTitle=$sheet->getCellByColumnAndRow(2,$row)->getValue();
                    $thesis->mem1Id=$sheet->getCellByColumnAndRow(3,$row)->getValue();
                    $thesis->mem2Id=$sheet->getCellByColumnAndRow(4,$row)->getValue();
                    $thesis->mem3Id=$sheet->getCellByColumnAndRow(5,$row)->getValue();
                    $thesis->supName=$sheet->getCellByColumnAndRow(6,$row)->getValue();
                    $thesis->save();
                }

                

                //authors
                $spreadsheet->setActiveSheetIndexByName('authors');
                $sheet=$spreadsheet->getActiveSheet();
                $highestRow = $sheet->getHighestRow(); // e.g. 10
                $highestColumn = $sheet->getHighestColumn(); // e.g 'F'
                $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); // e.g. 5
                for ($row = 2; $row <= $highestRow; ++$row) {
                    $author=new authors();
                    $author->authId=$sheet->getCellByColumnAndRow(1,$row)->getValue();
                    $author->name=$sheet->getCellByColumnAndRow(2,$row)->getValue();
                    $author->noOfBooksAvail=$sheet->getCellByColumnAndRow(3,$row)->getValue();
                    $author->save();
                }

                //books
                $spreadsheet->setActiveSheetIndexByName('books');
                $sheet=$spreadsheet->getActiveSheet();
                $highestRow = $sheet->getHighestRow(); // e.g. 10
                $highestColumn = $sheet->getHighestColumn(); // e.g 'F'
                $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); // e.g. 5
                for ($row = 2; $row <= $highestRow; ++$row) {
                    $book=new books();
                    $book->bookId=$sheet->getCellByColumnAndRow(1,$row)->getValue();
                    $book->bookTitle=$sheet->getCellByColumnAndRow(2,$row)->getValue();
                    $book->edition=$sheet->getCellByColumnAndRow(3,$row)->getValue();
                    $book->authId=$sheet->getCellByColumnAndRow(4,$row)->getValue();
                    $book->catId=$sheet->getCellByColumnAndRow(5,$row)->getValue();
                    $book->totalAvail=$sheet->getCellByColumnAndRow(6,$row)->getValue();
                    $book->totalIss=$sheet->getCellByColumnAndRow(7,$row)->getValue();
                    $book->save();
                }

                

                //booksissued
                $spreadsheet->setActiveSheetIndexByName('booksissued');
                $sheet=$spreadsheet->getActiveSheet();
                $highestRow = $sheet->getHighestRow(); // e.g. 10
                $highestColumn = $sheet->getHighestColumn(); // e.g 'F'
                $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); // e.g. 5
                for ($row = 2; $row <= $highestRow; ++$row) {
                    $bookiss=new booksIssued();
                    $bookiss->issueId=$sheet->getCellByColumnAndRow(1,$row)->getValue();
                    $bookiss->issueDate=$sheet->getCellByColumnAndRow(2,$row)->getValue();
                    $bookiss->retDate=$sheet->getCellByColumnAndRow(3,$row)->getValue();
                    $bookiss->bookId=$sheet->getCellByColumnAndRow(4,$row)->getValue();
                    $bookiss->memId=$sheet->getCellByColumnAndRow(5,$row)->getValue();
                    $bookiss->save();
                }


                //books returned
                $spreadsheet->setActiveSheetIndexByName('booksreturned');
                $sheet=$spreadsheet->getActiveSheet();
                $highestRow = $sheet->getHighestRow(); // e.g. 10
                $highestColumn = $sheet->getHighestColumn(); // e.g 'F'
                $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); // e.g. 5
                for ($row = 2; $row <= $highestRow; ++$row) {
                    $bookret=new booksReturned();
                    $bookret->returnId=$sheet->getCellByColumnAndRow(1,$row)->getValue();
                    $bookret->retDate=$sheet->getCellByColumnAndRow(2,$row)->getValue();
                    $bookret->bookId=$sheet->getCellByColumnAndRow(3,$row)->getValue();
                    $bookret->memId=$sheet->getCellByColumnAndRow(4,$row)->getValue();
                    $bookret->save();
                }
                return '<h1>data imported</h1>';
            }
        }
        return '<h1>Error plz try again</h1>';
        
    }
}
