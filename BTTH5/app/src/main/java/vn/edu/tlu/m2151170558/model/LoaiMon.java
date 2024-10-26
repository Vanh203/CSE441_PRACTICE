package vn.edu.tlu.m2151170558.model;

public class LoaiMon {
    private int MaLoai;
    private String TenLoai;
    private String MoTa;

    public LoaiMon(int maLoai, String tenLoai, String moTa) {
        MaLoai = maLoai;
        TenLoai = tenLoai;
        MoTa = moTa;
    }

    public int getMaLoai() {
        return MaLoai;
    }

    public String getTenLoai() {
        return TenLoai;
    }

    public String getMoTa() {
        return MoTa;
    }

    public void setTenLoai(String tenLoai) {
        TenLoai = tenLoai;
    }

    public void setMoTa(String moTa) {
        MoTa = moTa;
    }

    public void setMaLoai(int maLoai) {
        MaLoai = maLoai;
    }
}
