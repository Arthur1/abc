#include <bits/stdc++.h>
#include <unistd.h>
using namespace std;

int main()
{
    int N, D;
    cin >> N >> D;
    int ans = (N + 2 * D) / (2 * D + 1);
    cout << ans << endl;
    return 0;
}
