/**
 * ABC129
 * C - Typical Stairs
 */
#include <stdio.h>
#include <string.h>

#define MAX_S 2001
#define EMPTY '.'

int main(void) {
    int h, w;
    int i, j;
    int max = 0;
    int tmp;
    char s[MAX_S][MAX_S];
    int l[MAX_S][MAX_S], r[MAX_S][MAX_S], u[MAX_S][MAX_S], d[MAX_S][MAX_S];

    scanf("%d %d", &h, &w);

    for (i = 0; i < h; i++) {
        scanf("%s", s[i]);
    }

    for (i = 0; i < h; i++) {
        l[i][0] = s[i][0] == EMPTY ? 1 : 0;
        r[i][w - 1] = s[i][w - 1] == EMPTY ? 1 : 0;
        // printf("%c\n", s[i][0]);
        for (j = 1; j < w; j++) {
            // printf("%c\n", s[i][j]);
            l[i][j] = s[i][j] == EMPTY ? l[i][j - 1] + 1 : 0;
            r[i][w - 1 - j] = s[i][w - 1 - j] == EMPTY ? r[i][w - j] + 1 : 0;
        }
    }
    for (j = 0; j < w; j++) {
        d[0][j] = s[0][j] == EMPTY ? 1 : 0;
        u[h - 1][j] = s[h - 1][j] == EMPTY ? 1 : 0;
        for (i = 1; i < h; i++) {
            d[i][j] = s[i][j] == EMPTY ? d[i - 1][j] + 1 : 0;
            u[h - 1 - i][j] = s[h - 1 - i][j] == EMPTY ? u[h - i][j] + 1 : 0;
        }
    }

    for (i = 0; i < h; i++) {
        for (j = 0; j < w; j++) {
            // printf("%d %d %d %d\n", l[i][j], r[i][j], d[i][j], u[i][j]);
            tmp = l[i][j] + r[i][j] + d[i][j] + u[i][j] - 3;
            if (tmp > max) {
                max = tmp;
            }
        }
    }

    printf("%d\n", max);
    return 0;
}
