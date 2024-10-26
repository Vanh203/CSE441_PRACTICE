package vn.edu.tlu.m2151170558.model;

public class KhachHang {
    private int MaKH;
    private String TenDN;
    private String MatKhau;
    private String HoTen;
    private String DiaChi;
    private String DienThoai;
    private String Email;

    public KhachHang(int maKH, String tenDN, String matKhau, String hoTen, String diaChi, String dienThoai, String email) {
        MaKH = maKH;
        TenDN = tenDN;
        MatKhau = matKhau;
        HoTen = hoTen;
        DiaChi = diaChi;
        DienThoai = dienThoai;
        Email = email;
    }

    public String getMatKhau() {
        return MatKhau;
    }

    public void setMatKhau(String matKhau) {
        MatKhau = matKhau;
    }

    public int getMaKH() {
        return MaKH;
    }

    public void setMaKH(int maKH) {
        MaKH = maKH;
    }

    public String getTenDN() {
        return TenDN;
    }

    public void setTenDN(String tenDN) {
        TenDN = tenDN;
    }

    public String getHoTen() {
        return HoTen;
    }

    public void setHoTen(String hoTen) {
        HoTen = hoTen;
    }

    public String getDiaChi() {
        return DiaChi;
    }

    public void setDiaChi(String diaChi) {
        DiaChi = diaChi;
    }

    public String getDienThoai() {
        return DienThoai;
    }

    public void setDienThoai(String dienThoai) {
        DienThoai = dienThoai;
    }

    public String getEmail() {
        return Email;
    }

    public void setEmail(String email) {
        Email = email;
    }
}
