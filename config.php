<?php
	//Tên kỳ thi
	$contestName = "Themis judge website";
	//Mô tả kỳ thi
	$description = ""Bài làm nộp lên được chấm bằng phần mềm <a href='http://dsapblog.wordpress.com/'>Themis (Lê Minh Hoàng & Đỗ Đức Đông)</a>";
	//footer
	$footer = "&copy; 2013. Trường THPT chuyên Lý Tự Trọng - Cần Thơ. <br>Thiết kế bởi Nguyễn Hoàng Phú";
	//Thư mục chưa đề (định dạng pdf, jpg hoặc zip)
	$problemsDir = "contests/problems";//"contests/khoi10/problems";
	//Tên file đề tổng hợp
	$problemsFile = "";
	//Thư mục chứa test
	$examTestDir = "contests/test";//"contests/khoi10/test";
	//Tên file test tổng hợp
	$examTestFile = "";
	//Thư mục lưu bài làm trực tuyến của học sinh
	$uploadDir = "C:\\nopbai";
	//Thư mục chứa file logs
	$logsDir = "C:\\nopbai\\Logs";
	//Thời gian bắt đầu kỳ thi (theo định dạng bên dưới)
	$startTime = date_create("2016-06-02 14:00:00",timezone_open("Asia/Bangkok")); //YYYY-MM-DD HH:MM:SS
	//Thời gian làm bài - (đặt 0: không giới hạn)
	$duringTime = 0;
	//1: Công bố kết quả sau khi chấm, 0: không công bố.
	$publish = 1;
?>
