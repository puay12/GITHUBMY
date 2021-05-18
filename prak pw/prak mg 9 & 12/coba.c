#include <stdio.h>
#include <stdlib.h>
#include <math.h>

float fungsi(float);
float fungsi_turunan(float);
void menu();
void biseksi(float, float, float, int);
void raphson(float, int);

float xr, x[100];
int i = 0;
char pil;

main(){
    float xl, xu, errorMin;
    int iterasiMaks;
    puts("= Mencari akar persamaan dengan metode numerik =");
    puts("Fungsi : x*x - 6x + 9");
    fflush(stdin);
    printf("Masukkan jumlah iterasi maksimal = ");
    scanf("%d", &iterasiMaks);
    fflush(stdin);
    printf("Masukkan error minimum/toleransi error = ");
    scanf("%g", &errorMin);
    fflush(stdin);
    menu();
    fflush(stdin);
    if(pil == '1'){
        printf("\nMasukkan xl = ");
        scanf("%g", &xl);
        fflush(stdin);
        printf("Masukkan xu = ");
        scanf("%g", &xu);
        biseksi(xl, xu, errorMin, iterasiMaks);
        printf("Akar persamaan dari fungsi tersebut (xr) = %g\n", xr);
    }
    else{
        printf("\nMasukkan batas x (x[i]) = ");
        scanf("%g", &x[i]);
        raphson(errorMin, iterasiMaks);
        printf("Akar persamaan dari fungsi tersebut (x[i-1]) = %g\n", x[i-1]);
    }
    printf("Jumlah itrerasi yang dilakukan sebanyak %d kali\n\n", i);
}

float fungsi(float x){
    return (pow(x, 2) - (6 * x) + 9);
}

float fungsi_turunan(float x){
    return ((2 * x) - 6);
}

void menu(){
    puts("\nMETODE");
    puts("1. Bisection");
    puts("2. Rapshon");
    printf("Pilihan Anda : ");
    scanf("%c", &pil);
}

void biseksi(float xl, float xu, float er_min, int it_maks){
    float e = 100, xr_lama;
    xr = 0;
    puts("\niterasi ke | xr\t\t | e\t\t  | f(xr)");
    do{
        xr_lama = xr;
        xr = (xl + xu) / 2;
        if(xr != 0)
            e = fabs((xr - xr_lama) / xr) * 100;
        if(fungsi(xr) * fungsi(xl) < 0)
            xu = xr;
        else if(fungsi(xr) * fungsi(xl) > 0)
            xl = xr;
        else
            e = 0;
        printf("%-11d| %-12g| %-15g| %-12g\n", i+1, xr, e, fungsi(xr));
        i++;
    } while((e > er_min) && (i < it_maks));
}

void raphson(float er_min, int it_maks){
    float e = 100;
    puts("\nIterasi ke | x[i+1]\t | e");
    do{
        x[i+1] = x[i] - (fungsi(x[i]) / fungsi_turunan(x[i]));
        if(x[i] != 0)
            e = fabs((x[i+1] - x[i]) / x[i+1]) * 100;
        printf("%-11d| %-12g| %-15g\n", i+1, x[i+1], e);
        i++;
    }while((e > er_min) && (i < it_maks));
}