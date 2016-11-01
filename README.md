Cấu hình: Các tham số cấu hình: được lưu trong file www\config.php
- Thư mục chứa test mẫu và chứa đề phải nằm trong thư mục www (nên tạo thư mục con của www để chứa test mẫu và đề).
- Thư mục chứa bài nộp không nên nằm trong thư mục www.
- Sử dụng dấu “/” hoặc “\\” để phân cách thư mục trong file cấu hình.

Tài khoản: Tài khoản được lưu trong www\data\account.xml (định dạng xml Excel 2003). Khi cấp mật khẩu ban đầu cột repass có giá trị là 0, khi tài khoản đã đổi mật khẩu thì mật khẩu mới sẽ được mã hóa MD5 và cột repass có giá trị là 1.
