
# include "iGraphics.h"

/* 
	function iDraw() is called again and again by the system.
*/
int x = 400, y = 700, change= -5, a = 200, b = 700, p = 300, q = 700, r = 100, s = 700,d=600,e=700,i=0,j=0; 
bool flag = false,flag2 = false,flag3 = false,flag4=false ;
void blackmv()
{
	
	y += change;
	change *=+1;
	

	//if (y <= 0 || y >= 700) ;
	if (y <= 0)
		 y = 700;
	y += change;
	change *= +1;

}


void bluemv()
{
	
	if (flag == true)
	b += change;
	if (b <= 0)
		b = 700;
	b+= change;
	change *= +1;

}
void greenmv()
{
	if (flag2 == true)
		q += change;
	if (q <= 0)
		q = 700;
	change *= +1;

}
void ormv()
{
	if (flag3 == true)
		s += change;
	if (s <= 0)
		s = 700;
	change *= +1;

}
void hrtmv()
{
	if (flag4 == true)
		e += change;
	if (e <= 0)
		e = 700;
	change *= +1;
}
void true_flag()
{
	flag = true;
}
void true_flag2()
{
	flag2 = true;
}
void true_flag3()
{
	flag3 = true;
}
void true_flag4()
{
	flag4 = true;
}

void iDraw()
{

	iShowBMP(0, 0, "sky.bmp");
	iShowBMP(x, y, "black.bmp");
	iShowBMP(a,b,"BLUE.bmp");
	iShowBMP(p, q, "or.bmp");
	iShowBMP(r, s, "green.bmp");
	iShowBMP(d, e, "heart.bmp");
	iShowBMP(i, j, "trgt.bmp");


	//iClear();
}

/* 
	function iMouseMove() is called when the user presses and drags the mouse.
	(mx, my) is the position where the mouse pointer is.
*/
void iMouseMove(int mx, int my)
{
	/*i = mx;
	j = my;*/

}

/* 
	function iMouse() is called when the user presses/releases the mouse.
	(mx, my) is the position where the mouse pointer is.
*/
void iMouse(int button, int state, int mx, int my)
{
	if(button == GLUT_LEFT_BUTTON && state == GLUT_DOWN)
	{
		i = mx ;
		j = my ;
	}
	if(button == GLUT_RIGHT_BUTTON && state == GLUT_DOWN)
	{
		//place your codes here	
	}
}

/*
	function iKeyboard() is called whenever the user hits a key in keyboard.
	key- holds the ASCII value of the key pressed. 
*/
void iKeyboard(unsigned char key)
{
	if(key == 'q')
	{
		//do something with 'q'
	}
	//place your codes for other keys here
}

/*
	function iSpecialKeyboard() is called whenver user hits special keys like-
	function keys, home, end, pg up, pg down, arraows etc. you have to use 
	appropriate constants to detect them. A list is:
	GLUT_KEY_F1, GLUT_KEY_F2, GLUT_KEY_F3, GLUT_KEY_F4, GLUT_KEY_F5, GLUT_KEY_F6, 
	GLUT_KEY_F7, GLUT_KEY_F8, GLUT_KEY_F9, GLUT_KEY_F10, GLUT_KEY_F11, GLUT_KEY_F12, 
	GLUT_KEY_LEFT, GLUT_KEY_UP, GLUT_KEY_RIGHT, GLUT_KEY_DOWN, GLUT_KEY_PAGE UP, 
	GLUT_KEY_PAGE DOWN, GLUT_KEY_HOME, GLUT_KEY_END, GLUT_KEY_INSERT 
*/
void iSpecialKeyboard(unsigned char key)
{

	if(key == GLUT_KEY_END)
	{
		exit(0);	
	}
	//place your codes for other keys here
}

int main()
{
	
	iSetTimer(.1, blackmv);
	iSetTimer(2000, true_flag);
    iSetTimer(.01, bluemv);
	iSetTimer(3000, true_flag2);
	iSetTimer(.1, greenmv);
	iSetTimer(4000, true_flag3);
	iSetTimer(.01, ormv);
	iSetTimer(5000, true_flag4);
	iSetTimer(.01, hrtmv);
	iInitialize(700, 700, "Baloon_Shoot");
	return 0;
}	