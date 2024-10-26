package vn.edu.tlu.m2151170558.model;

public class Mon {
    private int MaMon;
    private String TenMon;
    private String MoTa;
    private int MaLoai;
    private String Hinh;
    private int Gia;

    public Mon(int maMon, String tenMon, String moTa, int maLoai, String hinh, int gia) {
        MaMon = maMon;
        TenMon = tenMon;
        MoTa = moTa;
        MaLoai = maLoai;
        Hinh = hinh;
        Gia = gia;
    }

    public int getMaMon() {
        return MaMon;
    }

    public String getTenMon() {
        return TenMon;
    }

    public String getMoTa() {
        return MoTa;
    }

    public int getMaLoai() {
        return MaLoai;
    }

    public String getHinh() {
        return Hinh;
    }

    public int getGia() {
        return Gia;
    }

    public void setMaMon(int maMon) {
        MaMon = maMon;
    }

    public void setTenMon(String tenMon) {
        TenMon = tenMon;
    }

    public void setMoTa(String moTa) {
        MoTa = moTa;
    }

    public void setMaLoai(int maLoai) {
        MaLoai = maLoai;
    }

    public void setHinh(String hinh) {
        Hinh = hinh;
    }

    public void setGia(int gia) {
        Gia = gia;
    }
}
