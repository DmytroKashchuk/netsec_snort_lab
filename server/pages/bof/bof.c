#include <string.h>

int main(int argc, char **argv) {

    struct data {
        char buff[20];
        char pass[3];
    } mydata = {{}, "no"};

    strcpy(mydata.buff, argv[1]);

    if(strcmp(mydata.buff, "correctpassword") == 0)
    {
        strcpy(mydata.pass, "ye");
    }
    
    if (strcmp(mydata.pass, "no") == 0) {
    	return 1;
    } else {
    	return 0;
    }

    return 0;
}
