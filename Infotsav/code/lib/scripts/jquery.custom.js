j Q u e r y . n o C o n f l i c t ( ) ;  
  
  
 / /   D e m o S k i n   a n i m a t i o n  
 j Q u e r y ( d o c u m e n t ) . r e a d y ( f u n c t i o n ( )   {  
 	 j Q u e r y ( ' # d e m o s k i n ' ) . t o g g l e ( f u n c t i o n ( )   {  
 	 	 j Q u e r y ( ' # c o l o r _ s w i t c h e r ' ) . a n i m a t e ( {   l e f t : 0   } ,   7 0 0 ) ;  
 	 } ,  
 	 f u n c t i o n ( )   {  
 	 	 j Q u e r y ( ' # c o l o r _ s w i t c h e r ' ) . a n i m a t e ( {   l e f t : " - 1 0 0 p x "   } ,   7 0 0 ) ;  
 	 } ) ;  
 } ) ;  
  
  
 / /   D e m o S k i n   c s s   s w i t c h e r  
  
 ( f u n c t i o n ( $ )  
 {  
 	 $ ( d o c u m e n t ) . r e a d y ( f u n c t i o n ( )   {  
 	 	 $ ( ' # c o l o r s   l i   a ' ) . c l i c k ( f u n c t i o n ( )  
 	 	 {  
 	 	 	 s w i t c h S t y l e s t y l e ( t h i s . g e t A t t r i b u t e ( " r e l " ) ) ;  
 	 	 	 w i n d o w . l o c a t i o n   =   w i n d o w . l o c a t i o n ;    
 	 	 } ) ;  
 	 	 v a r   c   =   r e a d C o o k i e ( ' s t y l e ' ) ;  
 	 	 i f   ( c )   s w i t c h S t y l e s t y l e ( c ) ;  
 	 } ) ;  
  
 	 f u n c t i o n   s w i t c h S t y l e s t y l e ( s t y l e N a m e )  
 	 {  
 	 	 $ ( ' l i n k [ r e l * = s t y l e ] [ t i t l e ] ' ) . e a c h ( f u n c t i o n ( i )    
 	 	 {  
 	 	 	 t h i s . d i s a b l e d   =   t r u e ;  
 	 	 	 i f   ( t h i s . g e t A t t r i b u t e ( ' t i t l e ' )   = =   s t y l e N a m e )   t h i s . d i s a b l e d   =   f a l s e ;  
 	 	 } ) ;  
 	 	 c r e a t e C o o k i e ( ' s t y l e ' ,   s t y l e N a m e ,   3 6 5 ) ;  
 	 }  
 } ) ( j Q u e r y ) ;  
 / /   c o o k i e   f u n c t i o n s   h t t p : / / w w w . q u i r k s m o d e . o r g / j s / c o o k i e s . h t m l  
 f u n c t i o n   c r e a t e C o o k i e ( n a m e , v a l u e , d a y s )  
 {  
 	 i f   ( d a y s )  
 	 {  
 	 	 v a r   d a t e   =   n e w   D a t e ( ) ;  
 	 	 d a t e . s e t T i m e ( d a t e . g e t T i m e ( ) + ( d a y s * 2 4 * 6 0 * 6 0 * 1 0 0 0 ) ) ;  
 	 	 v a r   e x p i r e s   =   " ;   e x p i r e s = " + d a t e . t o G M T S t r i n g ( ) ;  
 	 }  
 	 e l s e   v a r   e x p i r e s   =   " " ;  
 	 d o c u m e n t . c o o k i e   =   n a m e + " = " + v a l u e + e x p i r e s + " ;   p a t h = / " ;  
 }  
 f u n c t i o n   r e a d C o o k i e ( n a m e )  
 {  
 	 v a r   n a m e E Q   =   n a m e   +   " = " ;  
 	 v a r   c a   =   d o c u m e n t . c o o k i e . s p l i t ( ' ; ' ) ;  
 	 f o r ( v a r   i = 0 ; i   <   c a . l e n g t h ; i + + )  
 	 {  
 	 	 v a r   c   =   c a [ i ] ;  
 	 	 w h i l e   ( c . c h a r A t ( 0 ) = = '   ' )   c   =   c . s u b s t r i n g ( 1 , c . l e n g t h ) ;  
 	 	 i f   ( c . i n d e x O f ( n a m e E Q )   = =   0 )   r e t u r n   c . s u b s t r i n g ( n a m e E Q . l e n g t h , c . l e n g t h ) ;  
 	 }  
 	 r e t u r n   n u l l ;  
 }  
 f u n c t i o n   e r a s e C o o k i e ( n a m e )  
 {  
 	 c r e a t e C o o k i e ( n a m e , " " , - 1 ) ;  
 } 	  
  
  
 / / C u f o n   f o n t   r e p l a c e   - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
 C u f o n . r e p l a c e ( ' . d r o p c a p ,   . l i n k s   a ,   . w i d g e t _ t i t l e ,   # d e m o s k i n ' ,   {   f o n t F a m i l y :   ' M g O p e n   M o d a t a ' ,   h o v e r :   t r u e   } ) ;  
 C u f o n . r e p l a c e ( ' # l o g o ,   # l o g o 1 ,   # n a v   *   a ,   . f i l t e r _ b u t t o n   a ,   . d r o p c a p 2 ,   h 1 ,   # h e a d e r _ b a r   h 1 ,   . p a g e _ t i t l e ,   . t i t l e ,   h 6 ' ,   {   f o n t F a m i l y :   ' A n t i p a s t o ' ,   h o v e r :   t r u e   } ) ;  
  
  
 / / E q u a l i z e   h e i g h t   c o l u m n   - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
 j Q u e r y ( d o c u m e n t ) . r e a d y ( f u n c t i o n ( ) {  
 	 j Q u e r y ( ' . e q u a l i z e _ g r o u p ' ) . j H e i g h t s ( ) ;  
 	 j Q u e r y ( ' # e q u a l i z e ' ) . j H e i g h t s ( ) ;  
 	 j Q u e r y ( ' # e q u a l i z e 2 ' ) . j H e i g h t s ( ) ;  
 	 j Q u e r y ( ' # e q u a l i z e 3 ' ) . j H e i g h t s ( ) ;  
 	 j Q u e r y ( ' # e q u a l i z e 4 ' ) . j H e i g h t s ( ) ;  
 	 j Q u e r y ( ' # e q u a l i z e 5 ' ) . j H e i g h t s ( ) ;  
 	 j Q u e r y ( ' # e q u a l i z e 6 ' ) . j H e i g h t s ( ) ;  
 	 j Q u e r y ( ' # e q u a l i z e 7 ' ) . j H e i g h t s ( ) ;  
 	 j Q u e r y ( ' # e q u a l i z e 8 ' ) . j H e i g h t s ( ) ;  
 	 j Q u e r y ( ' # e q u a l i z e 9 ' ) . j H e i g h t s ( ) ;  
 } ) ;  
  
 j Q u e r y . f n . j H e i g h t s   =   f u n c t i o n ( )   {  
 	 v a r   t a l l e s t   =   0 ;  
       	 t h i s . c h i l d r e n ( ) . e a c h ( f u n c t i o n ( ) {  
         	   i f   ( j Q u e r y ( t h i s ) . i n n e r H e i g h t ( )   >   t a l l e s t )   {  
       	   	 	   t a l l e s t   =   j Q u e r y ( t h i s ) . i n n e r H e i g h t ( ) ;    
         	 }  
       	 } ) ;  
 	 j Q u e r y ( t h i s ) . c h i l d r e n ( ) . h e i g h t ( t a l l e s t ) ;  
 } ;  
  
  
 / /   I m a g e s   f a d e i n  
 j Q u e r y ( d o c u m e n t ) . r e a d y ( f u n c t i o n ( )   {  
 	 j Q u e r y ( ' i m g ' ) . h i d e ( ) . f a d e I n ( ' f a s t ' ) ;  
 } ) ;  
  
  
 / /   I E   7   f i x i n g   f o r   t h e   f o o t e r   s o c i a b l e   i c o n s  
 j Q u e r y ( d o c u m e n t ) . r e a d y ( f u n c t i o n ( )   {  
 	 j Q u e r y ( ' < l i > < a   i d = " i e 7 _ f i x "   s t y l e = " d i s p l a y : n o n e ; " > < / a > < / l i > ' ) . a p p e n d T o ( ' # s o c i a b l e ' ) ;  
 } ) ;  
  
 / /   H o v e r   p i c t u r e s   - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
 j Q u e r y ( d o c u m e n t ) . r e a d y ( f u n c t i o n ( )   {  
 	 j Q u e r y ( ' . i m g _ w r a p ' ) . h i d e ( ) . f a d e I n ( ' n o r m a l ' ) ;  
  
 	 j Q u e r y ( ' . i m g _ w r a p   a   i m g ' ) . h o v e r ( f u n c t i o n ( )   {  
 	 	 j Q u e r y ( t h i s ) . a n i m a t e ( {   o p a c i t y :   0 . 4 } ,   5 0 0 ) ;  
 	 } ,  
 	 f u n c t i o n ( )   {  
 	 	 j Q u e r y ( t h i s ) . a n i m a t e ( {   o p a c i t y :   1 } ,   5 0 0 ) ;  
 	 } ) ;  
 } ) ;  
  
 / /   S w i t c h i n g   p o r t f o l i o   v i e w s   - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
 j Q u e r y ( d o c u m e n t ) . r e a d y ( f u n c t i o n ( )   {  
 	 j Q u e r y ( ' # f u l l _ v i e w ' ) . c l i c k ( f u n c t i o n ( )   {  
 	 	 i f   ( j Q u e r y ( ' # g a l l e r y _ v i e w ' ) . i s ( ' . a c t i v e ' ) )   {  
 	 	 	 j Q u e r y ( t h i s ) . a d d C l a s s ( ' a c t i v e ' ) ;  
 	 	 	 j Q u e r y ( ' # p o r t f o l i o _ c o n t e n t ' ) . f a d e O u t ( " f a s t " ,   f u n c t i o n ( ) {  
 	 	 	 	 j Q u e r y ( ' # p o r t f o l i o _ c o n t e n t ' ) . f a d e I n ( " f a s t " ) . a d d C l a s s ( ' p o r t f o l i o _ f u l l ' ) ;  
 	 	 	 } ) ;  
 	 	 	 j Q u e r y ( ' # g a l l e r y _ v i e w ' ) . r e m o v e C l a s s ( ' a c t i v e ' ) ;  
 	 	 	 j Q u e r y ( ' # p o r t f o l i o _ c o n t e n t ' ) . f a d e O u t ( " f a s t " ,   f u n c t i o n ( ) {  
 	 	 	 	 j Q u e r y ( ' # p o r t f o l i o _ c o n t e n t ' ) . f a d e I n ( " f a s t " ) . r e m o v e C l a s s ( ' p o r t f o l i o _ g a l l e r y ' ) ;  
 	 	 	 } ) ;  
 	 	 	 r e t u r n   f a l s e ;  
 	 	 }  
 	 } ) ;  
 	  
 	 j Q u e r y ( ' # g a l l e r y _ v i e w ' ) . c l i c k ( f u n c t i o n ( )   {  
 	 	 i f   ( j Q u e r y ( ' # f u l l _ v i e w ' ) . i s ( ' . a c t i v e ' ) )   {  
 	 	 	 j Q u e r y ( t h i s ) . a d d C l a s s ( ' a c t i v e ' ) ;  
 	 	 	 j Q u e r y ( ' # p o r t f o l i o _ c o n t e n t ' ) . f a d e O u t ( " f a s t " ,   f u n c t i o n ( ) {  
 	 	 	 	 j Q u e r y ( ' # p o r t f o l i o _ c o n t e n t ' ) . f a d e I n ( " f a s t " ) . a d d C l a s s ( ' p o r t f o l i o _ g a l l e r y ' ) ;  
 	 	 	 } ) ;  
 	 	 	 j Q u e r y ( ' # f u l l _ v i e w ' ) . r e m o v e C l a s s ( ' a c t i v e ' ) ;  
 	 	 	 j Q u e r y ( ' # p o r t f o l i o _ c o n t e n t ' ) . f a d e O u t ( " f a s t " ,   f u n c t i o n ( ) {  
 	 	 	 	 j Q u e r y ( ' # p o r t f o l i o _ c o n t e n t ' ) . f a d e I n ( " f a s t " ) . r e m o v e C l a s s ( ' p o r t f o l i o _ f u l l ' ) ;  
 	 	 	 } ) ;  
 	 	 	 r e t u r n   f a l s e ;  
 	 	 }  
 	 } ) ;  
 } ) ;  
  
  
 / /   P o r t f o l i o   G a l l e r y   s l i d e d o w n   - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
 j Q u e r y ( d o c u m e n t ) . r e a d y ( f u n c t i o n ( )   {  
 	 j Q u e r y ( ' . p o r t f o l i o _ g a l l e r y   . d e s c r i p t i o n ' ) . h o v e r ( f u n c t i o n ( )   {  
 	 	 j Q u e r y ( t h i s ) . a n i m a t e ( {   t o p : " 0 " } ,   3 0 0 ,   ' e a s e O u t B o u n c e ' ) ;  
 	 } ,   f u n c t i o n ( )   {  
 	 	 j Q u e r y ( ' . p o r t f o l i o _ g a l l e r y   . d e s c r i p t i o n ' ) . a n i m a t e ( {   t o p : " - 1 2 5 p x " } ,   2 0 0 ) ;  
 	 } ) ;  
 } ) ;  
  
  
 / /   P r e t t y   P h o t o   G a l l e r y   - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
 j Q u e r y ( d o c u m e n t ) . r e a d y ( f u n c t i o n ( ) {  
 	 j Q u e r y ( " a [ r e l ^ = ' p r e t t y P h o t o ' ] " ) . p r e t t y P h o t o ( { t h e m e : ' f a c e b o o k ' } ) ;  
 } ) ;  
  
  
 / /   A d d   t h e   h i g h l i g h t   f o r   t h e   c o m m e n t s   t o   h a v e   o n e   o n   t w o   w i t h   a   y e l l o w   b a c k g r o u n d   - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
 j Q u e r y ( d o c u m e n t ) . r e a d y ( f u n c t i o n ( )   {  
 	 j Q u e r y ( ' . c o m m e n t : e v e n ' ) . a d d C l a s s ( ' h i g h l i g h t ' ) ;  
 } ) ;  
  
  
 / / B l o g   F i l t e r  
 j Q u e r y ( d o c u m e n t ) . r e a d y ( f u n c t i o n ( )   {  
 	 j Q u e r y ( ' . f i l t e r _ b u t t o n ' ) . c l i c k ( f u n c t i o n ( )   {  
 	 	 i f   ( j Q u e r y ( ' . s u b f i l t e r s ' ) . c s s ( ' v i s i b i l i t y ' , ' h i d d e n ' ) )   {  
 	 	 	 j Q u e r y ( t h i s ) . n e x t ( ) . c s s ( { ' v i s i b i l i t y ' : ' v i s i b l e ' ,   o p a c i t y : 0 } ) . a n i m a t e ( {   o p a c i t y : 1 } ,   3 0 0 ) ;  
 	 	 }   e l s e   {  
 	 	 	 j Q u e r y ( ' . s u b f i l t e r s ' ) . c s s ( ' v i s i b i l i t y ' , ' h i d d e n ' ) ;  
 	 	 }  
 	 } ) ;  
 	  
 	 j Q u e r y ( ' . s u b f i l t e r s ' ) . m o u s e l e a v e ( f u n c t i o n ( )   {  
 	 	 j Q u e r y ( t h i s ) . a n i m a t e ( {   o p a c i t y : 0 } ,   7 0 0 ) . c s s ( ' v i s i b i l i t y ' , ' h i d d e n ' ) ;  
 	 } ) ;  
 } ) ;  
  
  
 / /   G a l l e r y   s c r o l l a b l e   - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
 j Q u e r y ( d o c u m e n t ) . r e a d y ( f u n c t i o n ( )   {  
 	 j Q u e r y ( " . s c r o l l a b l e _ g a l " ) . s c r o l l a b l e ( { s i z e : 1 ,   c l i c k a b l e : f a l s e } ) . n a v i g a t o r ( ) ;  
 } ) ;  
  
  
 / / W a v e   s l i d e r   c a l l   - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
 j Q u e r y ( d o c u m e n t ) . r e a d y ( f u n c t i o n ( )   {  
 	 j Q u e r y ( ' . w a v e s h o w ' ) . n i v o S l i d e r ( {  
 	 	 e f f e c t : ' s l i c e D o w n ' ,  
 	 	 s l i c e s : 1 5 ,  
 	 	 a n i m S p e e d : 1 0 0 0 ,  
 	 	 p a u s e T i m e : 5 0 0 0 ,  
 	 	 d i r e c t i o n N a v : t r u e ,   / / N e x t   &   P r e v  
 	 	 d i r e c t i o n N a v H i d e : t r u e ,   / / O n l y   s h o w   o n   h o v e r  
 	 	 c o n t r o l N a v : t r u e ,   / / 1 , 2 , 3 . . .  
 	 	 k e y b o a r d N a v : t r u e ,   / / U s e   l e f t   &   r i g h t   a r r o w s  
 	 	 p a u s e O n H o v e r : t r u e ,   / / S t o p   a n i m a t i o n   w h i l e   h o v e r i n g  
 	 	 m a n u a l A d v a n c e : f a l s e ,   / / F o r c e   m a n u a l   t r a n s i t i o n s  
 	 	 c a p t i o n O p a c i t y : 0 . 8 ,   / / U n i v e r s a l   c a p t i o n   o p a c i t y  
 	 	 b e f o r e C h a n g e :   f u n c t i o n ( ) { } ,  
 	 	 a f t e r C h a n g e :   f u n c t i o n ( ) { } ,  
 	 	 s l i d e s h o w E n d :   f u n c t i o n ( ) { }   / / T r i g g e r s   a f t e r   a l l   s l i d e s   h a v e   b e e n   s h o w n  
 	 } ) ;  
 } ) ;  
  
  
 / / S i m p l e   S l i d e r   ( j Q u e r y T o o l s )   - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
 j Q u e r y ( d o c u m e n t ) . r e a d y ( f u n c t i o n ( )   {  
 	 j Q u e r y ( " . s c r o l l a b l e " ) . s c r o l l a b l e ( { s i z e : 1 ,   c l i c k a b l e : f a l s e ,   c i r c u l a r :   t r u e } ) . n a v i g a t o r ( ) . a u t o s c r o l l ( {    
         	 s t e p s :   1 ,    
         	 i n t e r v a l :   5 0 0 0                    
 	 } ) ; 	  
 } ) ;  
  
  
 / /   S c r o l l i n g   t o   t o p   f u n c t i o n   - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
 j Q u e r y ( f u n c t i o n ( ) {  
 	 j Q u e r y . f n . s c r o l l T o T o p = f u n c t i o n ( ) {  
 	 	 j Q u e r y ( t h i s ) . h i d e ( ) . r e m o v e A t t r ( " h r e f " ) ;  
 	 	 	 i f ( j Q u e r y ( w i n d o w ) . s c r o l l T o p ( ) ! = " 0 " ) {  
 	 	 	 	 j Q u e r y ( t h i s ) . f a d e I n ( " s l o w " ) } v a r   s c r o l l D i v = j Q u e r y ( t h i s ) ;  
 	 	 	 	 j Q u e r y ( w i n d o w ) . s c r o l l ( f u n c t i o n ( ) {  
 	 	 	 	 	 i f ( j Q u e r y ( w i n d o w ) . s c r o l l T o p ( ) = = " 0 " ) {  
 	 	 	 	 	 	 j Q u e r y ( s c r o l l D i v ) . f a d e O u t ( " s l o w " ) }  
 	 	 	 	 	  
 	 	 	 	 	 e l s e { j Q u e r y ( s c r o l l D i v ) . f a d e I n ( " s l o w " ) } } ) ;  
 	 	 	 	 	 	 j Q u e r y ( t h i s ) . c l i c k ( f u n c t i o n ( ) {  
 	 	 	 	 	 	 	 j Q u e r y ( " h t m l ,   b o d y " ) . a n i m a t e ( { s c r o l l T o p : 0 } , " s l o w " )  
 	 	 	 	 	 	 } )  
 	 }  
 } ) ;  
  
 j Q u e r y ( f u n c t i o n ( )   {  
 	 j Q u e r y ( " . d i v i d e r _ t o p " ) . s c r o l l T o T o p ( ) ;  
 } ) ;  
  
  
 / /   F o r m   v a l i d a t i o n   - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
 j Q u e r y ( d o c u m e n t ) . r e a d y ( f u n c t i o n ( ) {    
 	 j Q u e r y ( " . f o r m _ v a l i d a t e " ) . v a l i d a t o r ( { 	 / /   i n i t i a l i z e   v a l i d a t o r   w i t h   t h e   n e w   e f f e c t  
 	       e f f e c t :   ' w a l l ' ,    
 	       c o n t a i n e r :   ' # e r r o r s ' ,    
 	       e r r o r I n p u t E v e n t :   n u l l  
 	        
 	 } ) . s u b m i t ( f u n c t i o n ( e )     {   	 / /   c u s t o m   f o r m   s u b m i s s i o n   l o g i c      
 	 	 i f   ( ! e . i s D e f a u l t P r e v e n t e d ( ) )   { 	       / /   w h e n   d a t a   i s   v a l i d      
 	 	 	 j Q u e r y ( " # e r r o r s   h 1 " ) . h i d e ( ) ;  
 	             	 j Q u e r y ( " # e r r o r s   p " ) . h i d e ( ) ;  
 	             	 j Q u e r y ( " # e r r o r s " ) . f a d e I n ( ) ;  
 	             	 j Q u e r y ( " # s u c c e s s " ) . f a d e I n ( ' f a s t ' ) ;   / /   t e l l   u s e r   t h a t   e v e r y t h i n g   i s   O K  
 	             	 j Q u e r y ( " # s u c c e s s " ) . d e l a y ( 3 0 0 0 ) . f a d e O u t ( ' s l o w ' ) ;  
 	       	 	  
 	       	 	 f o r m . l o a d ( " s e c u r e m a i l . p h p " ) ;  
 	       	       e . p r e v e n t D e f a u l t ( ) ; 	             / /   p r e v e n t   t h e   f o r m   d a t a   b e i n g   s u b m i t t e d   t o   t h e   s e r v e r  
 	       	 }    
 	 } ) ;  
 	 j Q u e r y . t o o l s . v a l i d a t o r . a d d E f f e c t ( " w a l l " ,   f u n c t i o n ( e r r o r s ,   e v e n t )   {  
 	 	 v a r   w a l l   =   j Q u e r y ( t h i s . g e t C o n f ( ) . c o n t a i n e r ) . f a d e I n ( ) ; 	 	 / /   g e t   t h e   m e s s a g e   w a l l  
 	 	 w a l l . f i n d ( " p " ) . r e m o v e ( ) ; 	 	 / /   r e m o v e   a l l   e x i s t i n g   m e s s a g e s  
 	 	 j Q u e r y ( " # e r r o r s   h 1 " ) . s h o w ( ) ;  
 	 	 j Q u e r y . e a c h ( e r r o r s ,   f u n c t i o n ( i n d e x ,   e r r o r )   { 	 	 / /   a d d   n e w   o n e s  
 	 	 	 w a l l . a p p e n d (  
 	 	 	 	 ' < p   c l a s s = " w a r n i n g _ b o x " > < s t r o n g > '   + e r r o r . i n p u t . a t t r ( ' n a m e ' ) +   ' < / s t r o n g >   '   + e r r o r . m e s s a g e s [ 0 ] +   ' < / p > '  
 	 	 	 ) ; 	 	  
 	 	 } ) ;  
 	 } ,   f u n c t i o n ( i n p u t s )     { 	 / /   t h e   e f f e c t   d o e s   n o t h i n g   w h e n   a l l   i n p u t s   a r e   v a l i d 	 	  
 	 } ) ;  
 	  
 	 j Q u e r y ( " . f o r m _ v a l i d a t e " ) . v a l i d a t o r ( { 	 / /   i n i t i a l i z e   v a l i d a t o r   w i t h   t h e   n e w   e f f e c t  
 	       e f f e c t :   ' w a l l ' ,    
 	       c o n t a i n e r :   ' # e r r o r s ' ,    
 	       e r r o r I n p u t E v e n t :   n u l l  
 	        
 	 } ) . s u b m i t ( f u n c t i o n ( e )     {   	 / /   c u s t o m   f o r m   s u b m i s s i o n   l o g i c      
 	 	 i f   ( ! e . i s D e f a u l t P r e v e n t e d ( ) )   { 	       / /   w h e n   d a t a   i s   v a l i d      
 	 	 	 j Q u e r y ( " # e r r o r s   h 1 " ) . r e m o v e ( ) ;  
 	             	 j Q u e r y ( " # e r r o r s   p " ) . r e m o v e ( ) ;  
 	             	 j Q u e r y ( " # s u c c e s s " ) . f a d e I n ( ' f a s t ' ) ;   / /   t e l l   u s e r   t h a t   e v e r y t h i n g   i s   O K  
 	             	 j Q u e r y ( " # s u c c e s s " ) . d e l a y ( 3 0 0 0 ) . f a d e O u t ( ' s l o w ' ) ;  
 	       	 	  
 	       	 	 f o r m . l o a d ( " s e c u r e m a i l . p h p " ) ;  
 	       	       e . p r e v e n t D e f a u l t ( ) ; 	             / /   p r e v e n t   t h e   f o r m   d a t a   b e i n g   s u b m i t t e d   t o   t h e   s e r v e r  
 	       	 }    
 	 } ) ;  
 } ) ;  
  
  
 / /   F a d e I n   t h e   i n p u t   f o r m   i f   o t h e r   i s   c h e c k e d   - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
 j Q u e r y ( d o c u m e n t ) . r e a d y ( f u n c t i o n ( )   {  
 	 j Q u e r y ( ' # o t h e r ' ) . c l i c k ( f u n c t i o n ( )   {  
 	 	 i f   ( j Q u e r y ( ' # o t h e r : c h e c k e d ' ) . v a l ( )   ! = =   u n d e f i n e d )   {  
 	 	 	 j Q u e r y ( ' # s e l e c t _ o t h e r ' ) . f a d e I n ( ' f a s t ' ) . c s s ( ' d i s p l a y ' , ' i n l i n e ' ) ;  
 	 	 }   e l s e   {  
 	 	 	 j Q u e r y ( ' # s e l e c t _ o t h e r ' ) . f a d e O u t ( ' f a s t ' ) ;  
 	 	 }  
 	 } ) ;  
 } ) ;  
  
  
 / /   P r e f i l l   f o r m   v a l u e   f u n c t i o n   - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
 f u n c t i o n   p r e f i l l C l e a r ( f i e l d )   {  
 	 i f   ( f i e l d . v a l u e   = =   ' ' )   { f i e l d . v a l u e   =   f i e l d . d e f a u l t V a l u e ; }  
 	 e l s e   i f   ( f i e l d . d e f a u l t V a l u e = = f i e l d . v a l u e )   { f i e l d . v a l u e   =   ' ' ; }  
 } ;  
  
  
 / /   C o m m e n t   f o r m   f u n c t i o n   - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
 j Q u e r y ( d o c u m e n t ) . r e a d y ( f u n c t i o n ( )   {  
 	 j Q u e r y ( ' . s u b m i t _ c o m m e n t ' ) . c l i c k ( f u n c t i o n ( ) {  
 	 	 v a r   m y D a t e   =   n e w   D a t e ( ) ;  
 	 	 v a r   m y M o n t h   =   ( m y D a t e . g e t M o n t h ( )   + 1 ) ;   / /   S e t   u p   t h e   m o n t h   a s   a   s t r i n g  
 	 	 i f   ( m y M o n t h   = =   " 1 " )   {  
 	 	 	 m y M o n t h   =   ' J a n u a r y ' ;  
 	 	 }   e l s e   i f   ( m y M o n t h   = =   " 2 " )   {  
 	 	 	 m y M o n t h   =   ' F e b r u a r y ' ;  
 	 	 }   e l s e   i f   ( m y M o n t h   = =   " 3 " )   {  
 	 	 	 m y M o n t h   =   ' M a r c h ' ;  
 	 	 }   e l s e   i f   ( m y M o n t h   = =   " 4 " )   {  
 	 	 	 m y M o n t h   =   ' A p r i l ' ;  
 	 	 }   e l s e   i f   ( m y M o n t h   = =   " 5 " )   {  
 	 	 	 m y M o n t h   =   ' M a y ' ;  
 	 	 }   e l s e   i f   ( m y M o n t h   = =   " 6 " )   {  
 	 	 	 m y M o n t h   =   ' J u n e ' ;  
 	 	 }   e l s e   i f   ( m y M o n t h   = =   " 7 " )   {  
 	 	 	 m y M o n t h   =   ' J u l y ' ;  
 	 	 }   e l s e   i f   ( m y M o n t h   = =   " 8 " )   {  
 	 	 	 m y M o n t h   =   ' A u g u s t ' ;  
 	 	 }   e l s e   i f   ( m y M o n t h   = =   " 9 " )   {  
 	 	 	 m y M o n t h   =   ' S e p t e m b e r ' ;  
 	 	 }   e l s e   i f   ( m y M o n t h   = =   " 1 0 " )   {  
 	 	 	 m y M o n t h   =   ' O c t o b e r ' ;  
 	 	 }   e l s e   i f   ( m y M o n t h   = =   " 1 1 " )   {  
 	 	 	 m y M o n t h   =   ' N o v e m b e r ' ;  
 	 	 }   e l s e   i f   ( m y M o n t h   = =   " 1 2 " )   {  
 	 	 	 m y M o n t h   =   ' D e c e m b e r ' ;  
 	 	 }  
 	 	  
 	 	 v a r   t o d a y D a t e   =   m y M o n t h   +   '   '   +   m y D a t e . g e t D a t e ( )   +   ' t h ,   '   +   m y D a t e . g e t F u l l Y e a r ( ) ;   / /   S e t   u p   t h e   t o d a y ' s   d a t e  
  
 	 	 v a r   t e x t C o m m e n t   =   j Q u e r y ( ' # t e x t _ c o m m e n t ' ) . v a l ( ) ;   / /   G e t   t h e   v a l u e   e n t e r   p e r   t h e   u s e r   i n   t h e   T e x t a r e a  
 	 	  
 	 	 v a r   n a m e C o m m e n t   =   j Q u e r y ( ' # n a m e _ c o m m e n t ' ) . v a l ( ) ;   / /   G e t   t h e   v a l u e   e n t e r   p e r   t h e   u s e r   i n   t h e   i n p u t   f o r   t h e   n a m e  
 	 	  
 	 	 i f   ( j Q u e r y ( ' . c o m m e n t : f i r s t ' ) . i s ( ' . h i g h l i g h t ' ) )   {   / /   V e r i f y   i f   t h e   l a s t   c o m m e n t   h a v e   a   b a c k g r o u n d   c o l o r   a n d   a d d   i t   i f   n o t  
 	 	 	 v a r   l i C o m m e n t   =   ' < l i   c l a s s = " c o m m e n t " > ' ;  
 	 	 }   e l s e   {  
 	 	 	 v a r   l i C o m m e n t   =   ' < l i   c l a s s = " c o m m e n t   h i g h l i g h t " > ' ;  
 	 }  
 	 	  
 	 	 j Q u e r y (   l i C o m m e n t   +   ' < d i v   c l a s s = " c o m m e n t _ a u t h o r " > < i m g   s r c = " i m a g e s / a v a t a r . p n g "   a l t = " a v a t a r "   c l a s s = " a v a t a r "   / > < s p a n   c l a s s = " w h o s a y " > < a   h r e f = " # " > '   +   n a m e C o m m e n t   +   ' < / a > s a i d : < / s p a n > < s p a n   c l a s s = " c o m m e n t _ d a t e " > '   +   t o d a y D a t e   +   ' < / s p a n >   < b r   / > < / d i v > < d i v   c l a s s = " c o m m e n t _ t e x t " > < p > '   +   t e x t C o m m e n t   +   ' < / p > < / d i v > < / l i > ' ) . p r e p e n d T o ( ' # l i s t _ c o m m e n t s ' ) ;  
 	  
 	 	 v a r   n u m C o m m e n t   =   j Q u e r y ( ' . c o m m e n t ' ) . l e n g t h ;  
 	 	  
 	 	 j Q u e r y ( ' # n u m _ c o m m e n t ' ) . t e x t ( n u m C o m m e n t   +   '   C o m m e n t s :   ' ) ;  
 	 } ) ;  
 } ) ;  
  
 / /   S i d e b a r   m i n   h e i g h t   - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
 j Q u e r y ( d o c u m e n t ) . r e a d y ( f u n c t i o n ( )   {  
 	 v a r   s i d e H e i g h t   =   j Q u e r y ( ' # s i d e b a r ' ) . h e i g h t ( ) ;  
 	 v a r   c o n t H e i g h t   =   j Q u e r y ( ' # c o n t a i n e r ' ) . h e i g h t ( ) ;  
  
 	 i f   ( s i d e H e i g h t   <   c o n t H e i g h t )   {  
 	 	 c o n t H e i g h t   - =   2 3 0 ;  
 	 	 j Q u e r y ( ' # s i d e b a r ' ) . c s s ( ' m i n - h e i g h t ' ,   c o n t H e i g h t   +   ' p x ' ) ;  
 	 }  
  
 } ) ;  
  
  
 / / W a v e   s l i d e r   f u n c t i o n   - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
  
 ( f u n c t i o n ( $ )   {  
  
 	 $ . f n . n i v o S l i d e r   =   f u n c t i o n ( o p t i o n s )   {  
  
 	 	 / / D e f a u l t s   a r e   b e l o w  
 	 	 v a r   s e t t i n g s   =   $ . e x t e n d ( { } ,   $ . f n . n i v o S l i d e r . d e f a u l t s ,   o p t i o n s ) ;  
  
 	 	 r e t u r n   t h i s . e a c h ( f u n c t i o n ( )   {  
 	 	 	 / / U s e f u l   v a r i a b l e s .   P l a y   c a r e f u l l y .  
 	 	 	 v a r   v a r s   =   {  
 	 	 	 	 c u r r e n t S l i d e :   0 ,  
 	 	 	 	 c u r r e n t I m a g e :   ' ' ,  
 	 	 	 	 t o t a l S l i d e s :   0 ,  
 	 	 	 	 r a n d A n i m :   ' ' ,  
 	 	 	 	 r u n n i n g :   f a l s e ,  
 	 	 	 	 p a u s e d :   f a l s e ,  
 	 	 	 	 s t o p : f a l s e  
 	 	 	 } ;  
 	 	  
 	 	 	 / / G e t   t h i s   s l i d e r  
 	 	 	 v a r   s l i d e r   =   $ ( t h i s ) ;  
 	 	 	 s l i d e r . d a t a ( ' n i v o : v a r s ' ,   v a r s ) ;  
 	 	 	 s l i d e r . c s s ( ' p o s i t i o n ' , ' r e l a t i v e ' ) ;  
 	 	 	 s l i d e r . w i d t h ( ' 1 p x ' ) ;  
 	 	 	 s l i d e r . h e i g h t ( ' 1 p x ' ) ;  
 	 	 	 s l i d e r . a d d C l a s s ( ' n i v o S l i d e r ' ) ;  
 	 	 	  
 	 	 	 / / F i n d   o u r   s l i d e r   c h i l d r e n  
 	 	 	 v a r   k i d s   =   s l i d e r . c h i l d r e n ( ) ;  
 	 	 	 k i d s . e a c h ( f u n c t i o n ( )   {  
 	 	 	 	 v a r   c h i l d   =   $ ( t h i s ) ;  
 	 	 	 	 i f ( ! c h i l d . i s ( ' i m g ' ) ) {  
 	 	 	 	 	 i f ( c h i l d . i s ( ' a ' ) ) {  
 	 	 	 	 	 	 c h i l d . a d d C l a s s ( ' n i v o - i m a g e L i n k ' ) ;  
 	 	 	 	 	 }  
 	 	 	 	 	 c h i l d   =   c h i l d . f i n d ( ' i m g : f i r s t ' ) ;  
 	 	 	 	 }  
 	 	 	 	 / / D o n ' t   a s k  
 	 	 	 	 v a r   c h i l d W i d t h   =   c h i l d . w i d t h ( ) ;  
 	 	 	 	 i f ( c h i l d W i d t h   = =   0 )   c h i l d W i d t h   =   c h i l d . a t t r ( ' w i d t h ' ) ;  
 	 	 	 	 v a r   c h i l d H e i g h t   =   c h i l d . h e i g h t ( ) ;  
 	 	 	 	 i f ( c h i l d H e i g h t   = =   0 )   c h i l d H e i g h t   =   c h i l d . a t t r ( ' h e i g h t ' ) ;  
 	 	 	 	 / / R e s i z e   t h e   s l i d e r  
 	 	 	 	 i f ( c h i l d W i d t h   >   s l i d e r . w i d t h ( ) ) {  
 	 	 	 	 	 s l i d e r . w i d t h ( c h i l d W i d t h ) ;  
 	 	 	 	 }  
 	 	 	 	 i f ( c h i l d H e i g h t   >   s l i d e r . h e i g h t ( ) ) {  
 	 	 	 	 	 s l i d e r . h e i g h t ( c h i l d H e i g h t ) ;  
 	 	 	 	 }  
 	 	 	 	 c h i l d . c s s ( ' d i s p l a y ' , ' n o n e ' ) ;  
 	 	 	 	 v a r s . t o t a l S l i d e s + + ;  
 	 	 	 } ) ;  
 	 	 	  
 	 	 	 / / G e t   i n i t i a l   i m a g e  
 	 	 	 i f ( $ ( k i d s [ v a r s . c u r r e n t S l i d e ] ) . i s ( ' i m g ' ) ) {  
 	 	 	 	 v a r s . c u r r e n t I m a g e   =   $ ( k i d s [ v a r s . c u r r e n t S l i d e ] ) ;  
 	 	 	 }   e l s e   {  
 	 	 	 	 v a r s . c u r r e n t I m a g e   =   $ ( k i d s [ v a r s . c u r r e n t S l i d e ] ) . f i n d ( ' i m g : f i r s t ' ) ;  
 	 	 	 }  
 	 	 	  
 	 	 	 / / S h o w   i n i t i a l   l i n k  
 	 	 	 i f ( $ ( k i d s [ v a r s . c u r r e n t S l i d e ] ) . i s ( ' a ' ) ) {  
 	 	 	 	 $ ( k i d s [ v a r s . c u r r e n t S l i d e ] ) . c s s ( ' d i s p l a y ' , ' b l o c k ' ) ;  
 	 	 	 }  
 	 	 	  
 	 	 	 / / S e t   f i r s t   b a c k g r o u n d  
 	 	 	 s l i d e r . c s s ( ' b a c k g r o u n d ' , ' u r l ( ' +   v a r s . c u r r e n t I m a g e . a t t r ( ' s r c ' )   + ' )   n o - r e p e a t ' ) ;  
 	 	 	  
 	 	 	 / / A d d   i n i t i a l   s l i c e s  
 	 	 	 f o r ( v a r   i   =   0 ;   i   <   s e t t i n g s . s l i c e s ;   i + + ) {  
 	 	 	 	 v a r   s l i c e W i d t h   =   M a t h . r o u n d ( s l i d e r . w i d t h ( ) / s e t t i n g s . s l i c e s ) ;  
 	 	 	 	 i f ( i   = =   s e t t i n g s . s l i c e s - 1 ) {  
 	 	 	 	 	 s l i d e r . a p p e n d (  
 	 	 	 	 	 	 $ ( ' < d i v   c l a s s = " n i v o - s l i c e " > < / d i v > ' ) . c s s ( {   l e f t : ( s l i c e W i d t h * i ) + ' p x ' ,   w i d t h : ( s l i d e r . w i d t h ( ) - ( s l i c e W i d t h * i ) ) + ' p x '   } )  
 	 	 	 	 	 ) ;  
 	 	 	 	 }   e l s e   {  
 	 	 	 	 	 s l i d e r . a p p e n d (  
 	 	 	 	 	 	 $ ( ' < d i v   c l a s s = " n i v o - s l i c e " > < / d i v > ' ) . c s s ( {   l e f t : ( s l i c e W i d t h * i ) + ' p x ' ,   w i d t h : s l i c e W i d t h + ' p x '   } )  
 	 	 	 	 	 ) ;  
 	 	 	 	 }  
 	 	 	 }  
 	 	 	  
 	 	 	 / / C r e a t e   c a p t i o n  
 	 	 	 s l i d e r . a p p e n d (  
 	 	 	 	 $ ( ' < d i v   c l a s s = " n i v o - c a p t i o n " > < p > < / p > < / d i v > ' ) . c s s ( {   d i s p l a y : ' n o n e ' ,   o p a c i t y : s e t t i n g s . c a p t i o n O p a c i t y   } )  
 	 	 	 ) ; 	 	 	  
 	 	 	 / / P r o c e s s   i n i t i a l     c a p t i o n  
 	 	 	 i f ( v a r s . c u r r e n t I m a g e . a t t r ( ' t i t l e ' )   ! =   ' ' ) {  
 	 	 	 	 $ ( ' . n i v o - c a p t i o n   p ' ,   s l i d e r ) . h t m l ( v a r s . c u r r e n t I m a g e . a t t r ( ' t i t l e ' ) ) ; 	 	 	 	 	  
 	 	 	 	 $ ( ' . n i v o - c a p t i o n ' ,   s l i d e r ) . f a d e I n ( s e t t i n g s . a n i m S p e e d ) ;  
 	 	 	 }  
 	 	 	  
 	 	 	 / / I n   t h e   w o r d s   o f   S u p e r   M a r i o   " l e t ' s   a   g o ! "  
 	 	 	 v a r   t i m e r   =   0 ;  
 	 	 	 i f ( ! s e t t i n g s . m a n u a l A d v a n c e ) {  
 	 	 	 	 t i m e r   =   s e t I n t e r v a l ( f u n c t i o n ( ) {   n i v o R u n ( s l i d e r ,   k i d s ,   s e t t i n g s ,   f a l s e ) ;   } ,   s e t t i n g s . p a u s e T i m e ) ;  
 	 	 	 }  
  
 	 	 	 / / A d d   D i r e c t i o n   n a v  
 	 	 	 i f ( s e t t i n g s . d i r e c t i o n N a v ) {  
 	 	 	 	 s l i d e r . a p p e n d ( ' < d i v   c l a s s = " n i v o - d i r e c t i o n N a v " > < a   c l a s s = " n i v o - p r e v N a v " > P r e v < / a > < a   c l a s s = " n i v o - n e x t N a v " > N e x t < / a > < / d i v > ' ) ;  
 	 	 	 	  
 	 	 	 	 / / H i d e   D i r e c t i o n   n a v  
 	 	 	 	 i f ( s e t t i n g s . d i r e c t i o n N a v H i d e ) {  
 	 	 	 	 	 $ ( ' . n i v o - d i r e c t i o n N a v ' ,   s l i d e r ) . h i d e ( ) ;  
 	 	 	 	 	 s l i d e r . h o v e r ( f u n c t i o n ( ) {  
 	 	 	 	 	 	 $ ( ' . n i v o - d i r e c t i o n N a v ' ,   s l i d e r ) . s h o w ( ) ;  
 	 	 	 	 	 } ,   f u n c t i o n ( ) {  
 	 	 	 	 	 	 $ ( ' . n i v o - d i r e c t i o n N a v ' ,   s l i d e r ) . h i d e ( ) ;  
 	 	 	 	 	 } ) ;  
 	 	 	 	 }  
 	 	 	 	  
 	 	 	 	 $ ( ' a . n i v o - p r e v N a v ' ,   s l i d e r ) . l i v e ( ' c l i c k ' ,   f u n c t i o n ( ) {  
 	 	 	 	 	 i f ( v a r s . r u n n i n g )   r e t u r n   f a l s e ;  
 	 	 	 	 	 c l e a r I n t e r v a l ( t i m e r ) ;  
 	 	 	 	 	 t i m e r   =   ' ' ;  
 	 	 	 	 	 v a r s . c u r r e n t S l i d e - = 2 ;  
 	 	 	 	 	 n i v o R u n ( s l i d e r ,   k i d s ,   s e t t i n g s ,   ' p r e v ' ) ;  
 	 	 	 	 } ) ;  
 	 	 	 	  
 	 	 	 	 $ ( ' a . n i v o - n e x t N a v ' ,   s l i d e r ) . l i v e ( ' c l i c k ' ,   f u n c t i o n ( ) {  
 	 	 	 	 	 i f ( v a r s . r u n n i n g )   r e t u r n   f a l s e ;  
 	 	 	 	 	 c l e a r I n t e r v a l ( t i m e r ) ;  
 	 	 	 	 	 t i m e r   =   ' ' ;  
 	 	 	 	 	 n i v o R u n ( s l i d e r ,   k i d s ,   s e t t i n g s ,   ' n e x t ' ) ;  
 	 	 	 	 } ) ;  
 	 	 	 }  
 	 	 	  
 	 	 	 / / A d d   C o n t r o l   n a v  
 	 	 	 i f ( s e t t i n g s . c o n t r o l N a v ) {  
 	 	 	 	 v a r   n i v o C o n t r o l   =   $ ( ' < d i v   c l a s s = " n i v o - c o n t r o l N a v " > < / d i v > ' ) ;  
 	 	 	 	 s l i d e r . a p p e n d ( n i v o C o n t r o l ) ;  
 	 	 	 	 f o r ( v a r   i   =   0 ;   i   <   k i d s . l e n g t h ;   i + + ) {  
 	 	 	 	 	 n i v o C o n t r o l . a p p e n d ( ' < a   c l a s s = " n i v o - c o n t r o l "   r e l = " ' +   i   + ' " > ' +   ( i   +   1 )   + ' < / a > ' ) ;  
 	 	 	 	 }  
 	 	 	 	 / / S e t   i n i t i a l   a c t i v e   l i n k  
 	 	 	 	 $ ( ' . n i v o - c o n t r o l N a v   a : e q ( ' +   v a r s . c u r r e n t S l i d e   + ' ) ' ,   s l i d e r ) . a d d C l a s s ( ' a c t i v e ' ) ;  
 	 	 	 	  
 	 	 	 	 $ ( ' . n i v o - c o n t r o l N a v   a ' ,   s l i d e r ) . l i v e ( ' c l i c k ' ,   f u n c t i o n ( ) {  
 	 	 	 	 	 i f ( v a r s . r u n n i n g )   r e t u r n   f a l s e ;  
 	 	 	 	 	 i f ( $ ( t h i s ) . h a s C l a s s ( ' a c t i v e ' ) )   r e t u r n   f a l s e ;  
 	 	 	 	 	 c l e a r I n t e r v a l ( t i m e r ) ;  
 	 	 	 	 	 t i m e r   =   ' ' ;  
 	 	 	 	 	 s l i d e r . c s s ( ' b a c k g r o u n d ' , ' u r l ( ' +   v a r s . c u r r e n t I m a g e . a t t r ( ' s r c ' )   + ' )   n o - r e p e a t ' ) ;  
 	 	 	 	 	 v a r s . c u r r e n t S l i d e   =   $ ( t h i s ) . a t t r ( ' r e l ' )   -   1 ;  
 	 	 	 	 	 n i v o R u n ( s l i d e r ,   k i d s ,   s e t t i n g s ,   ' c o n t r o l ' ) ;  
 	 	 	 	 } ) ;  
 	 	 	 }  
 	 	 	  
 	 	 	 / / K e y b o a r d   N a v i g a t i o n  
 	 	 	 i f ( s e t t i n g s . k e y b o a r d N a v ) {  
 	 	 	 	 $ ( w i n d o w ) . k e y p r e s s ( f u n c t i o n ( e v e n t ) {  
 	 	 	 	 	 / / L e f t  
 	 	 	 	 	 i f ( e v e n t . k e y C o d e   = =   ' 3 7 ' ) {  
 	 	 	 	 	 	 i f ( v a r s . r u n n i n g )   r e t u r n   f a l s e ;  
 	 	 	 	 	 	 c l e a r I n t e r v a l ( t i m e r ) ;  
 	 	 	 	 	 	 t i m e r   =   ' ' ;  
 	 	 	 	 	 	 v a r s . c u r r e n t S l i d e - = 2 ;  
 	 	 	 	 	 	 n i v o R u n ( s l i d e r ,   k i d s ,   s e t t i n g s ,   ' p r e v ' ) ;  
 	 	 	 	 	 }  
 	 	 	 	 	 / / R i g h t  
 	 	 	 	 	 i f ( e v e n t . k e y C o d e   = =   ' 3 9 ' ) {  
 	 	 	 	 	 	 i f ( v a r s . r u n n i n g )   r e t u r n   f a l s e ;  
 	 	 	 	 	 	 c l e a r I n t e r v a l ( t i m e r ) ;  
 	 	 	 	 	 	 t i m e r   =   ' ' ;  
 	 	 	 	 	 	 n i v o R u n ( s l i d e r ,   k i d s ,   s e t t i n g s ,   ' n e x t ' ) ;  
 	 	 	 	 	 }  
 	 	 	 	 } ) ;  
 	 	 	 }  
 	 	 	  
 	 	 	 / / F o r   p a u s e O n H o v e r   s e t t i n g  
 	 	 	 i f ( s e t t i n g s . p a u s e O n H o v e r ) {  
 	 	 	 	 s l i d e r . h o v e r ( f u n c t i o n ( ) {  
 	 	 	 	 	 v a r s . p a u s e d   =   t r u e ;  
 	 	 	 	 	 c l e a r I n t e r v a l ( t i m e r ) ;  
 	 	 	 	 	 t i m e r   =   ' ' ;  
 	 	 	 	 } ,   f u n c t i o n ( ) {  
 	 	 	 	 	 v a r s . p a u s e d   =   f a l s e ;  
 	 	 	 	 	 / / R e s t a r t   t h e   t i m e r  
 	 	 	 	 	 i f ( t i m e r   = =   ' '   & &   ! s e t t i n g s . m a n u a l A d v a n c e ) {  
 	 	 	 	 	 	 t i m e r   =   s e t I n t e r v a l ( f u n c t i o n ( ) {   n i v o R u n ( s l i d e r ,   k i d s ,   s e t t i n g s ,   f a l s e ) ;   } ,   s e t t i n g s . p a u s e T i m e ) ;  
 	 	 	 	 	 }  
 	 	 	 	 } ) ;  
 	 	 	 }  
 	 	 	  
 	 	 	 / / E v e n t   w h e n   A n i m a t i o n   f i n i s h e s  
 	 	 	 s l i d e r . b i n d ( ' n i v o : a n i m F i n i s h e d ' ,   f u n c t i o n ( ) {    
 	 	 	 	 v a r s . r u n n i n g   =   f a l s e ;    
 	 	 	 	 / / H i d e   c h i l d   l i n k s  
 	 	 	 	 $ ( k i d s ) . e a c h ( f u n c t i o n ( ) {  
 	 	 	 	 	 i f ( $ ( t h i s ) . i s ( ' a ' ) ) {  
 	 	 	 	 	 	 $ ( t h i s ) . c s s ( ' d i s p l a y ' , ' n o n e ' ) ;  
 	 	 	 	 	 }  
 	 	 	 	 } ) ;  
 	 	 	 	 / / S h o w   c u r r e n t   l i n k  
 	 	 	 	 i f ( $ ( k i d s [ v a r s . c u r r e n t S l i d e ] ) . i s ( ' a ' ) ) {  
 	 	 	 	 	 $ ( k i d s [ v a r s . c u r r e n t S l i d e ] ) . c s s ( ' d i s p l a y ' , ' b l o c k ' ) ;  
 	 	 	 	 }  
 	 	 	 	 / / R e s t a r t   t h e   t i m e r  
 	 	 	 	 i f ( t i m e r   = =   ' '   & &   ! v a r s . p a u s e d   & &   ! s e t t i n g s . m a n u a l A d v a n c e ) {  
 	 	 	 	 	 t i m e r   =   s e t I n t e r v a l ( f u n c t i o n ( ) {   n i v o R u n ( s l i d e r ,   k i d s ,   s e t t i n g s ,   f a l s e ) ;   } ,   s e t t i n g s . p a u s e T i m e ) ;  
 	 	 	 	 }  
 	 	 	 	 / / T r i g g e r   t h e   a f t e r C h a n g e   c a l l b a c k  
 	 	 	 	 s e t t i n g s . a f t e r C h a n g e . c a l l ( t h i s ) ;  
 	 	 	 } ) ;  
 	 	 } ) ;  
 	 	  
 	 	 f u n c t i o n   n i v o R u n ( s l i d e r ,   k i d s ,   s e t t i n g s ,   n u d g e ) {  
 	 	 	 / / G e t   o u r   v a r s  
 	 	 	 v a r   v a r s   =   s l i d e r . d a t a ( ' n i v o : v a r s ' ) ;  
 	 	 	 i f ( v a r s . s t o p )   r e t u r n   f a l s e ;  
 	 	 	  
 	 	 	 / / T r i g g e r   t h e   b e f o r e C h a n g e   c a l l b a c k  
 	 	 	 s e t t i n g s . b e f o r e C h a n g e . c a l l ( t h i s ) ;  
 	 	 	 	 	  
 	 	 	 / / S e t   c u r r e n t   b a c k g r o u n d   b e f o r e   c h a n g e  
 	 	 	 i f ( ! n u d g e ) {  
 	 	 	 	 s l i d e r . c s s ( ' b a c k g r o u n d ' , ' u r l ( ' +   v a r s . c u r r e n t I m a g e . a t t r ( ' s r c ' )   + ' )   n o - r e p e a t ' ) ;  
 	 	 	 }   e l s e   {  
 	 	 	 	 i f ( n u d g e   = =   ' p r e v ' ) {  
 	 	 	 	 	 s l i d e r . c s s ( ' b a c k g r o u n d ' , ' u r l ( ' +   v a r s . c u r r e n t I m a g e . a t t r ( ' s r c ' )   + ' )   n o - r e p e a t ' ) ;  
 	 	 	 	 }  
 	 	 	 	 i f ( n u d g e   = =   ' n e x t ' ) {  
 	 	 	 	 	 s l i d e r . c s s ( ' b a c k g r o u n d ' , ' u r l ( ' +   v a r s . c u r r e n t I m a g e . a t t r ( ' s r c ' )   + ' )   n o - r e p e a t ' ) ;  
 	 	 	 	 }  
 	 	 	 }  
 	 	 	 v a r s . c u r r e n t S l i d e + + ;  
 	 	 	 i f ( v a r s . c u r r e n t S l i d e   = =   v a r s . t o t a l S l i d e s ) {    
 	 	 	 	 v a r s . c u r r e n t S l i d e   =   0 ;  
 	 	 	 	 / / T r i g g e r   t h e   s l i d e s h o w E n d   c a l l b a c k  
 	 	 	 	 s e t t i n g s . s l i d e s h o w E n d . c a l l ( t h i s ) ;  
 	 	 	 }  
 	 	 	 i f ( v a r s . c u r r e n t S l i d e   <   0 )   v a r s . c u r r e n t S l i d e   =   ( v a r s . t o t a l S l i d e s   -   1 ) ;  
 	 	 	 / / S e t   v a r s . c u r r e n t I m a g e  
 	 	 	 i f ( $ ( k i d s [ v a r s . c u r r e n t S l i d e ] ) . i s ( ' i m g ' ) ) {  
 	 	 	 	 v a r s . c u r r e n t I m a g e   =   $ ( k i d s [ v a r s . c u r r e n t S l i d e ] ) ;  
 	 	 	 }   e l s e   {  
 	 	 	 	 v a r s . c u r r e n t I m a g e   =   $ ( k i d s [ v a r s . c u r r e n t S l i d e ] ) . f i n d ( ' i m g : f i r s t ' ) ;  
 	 	 	 }  
 	 	 	  
 	 	 	 / / S e t   a c i t v e   l i n k s  
 	 	 	 i f ( s e t t i n g s . c o n t r o l N a v ) {  
 	 	 	 	 $ ( ' . n i v o - c o n t r o l N a v   a ' ,   s l i d e r ) . r e m o v e C l a s s ( ' a c t i v e ' ) ;  
 	 	 	 	 $ ( ' . n i v o - c o n t r o l N a v   a : e q ( ' +   v a r s . c u r r e n t S l i d e   + ' ) ' ,   s l i d e r ) . a d d C l a s s ( ' a c t i v e ' ) ;  
 	 	 	 }  
 	 	 	  
 	 	 	 / / P r o c e s s   c a p t i o n  
 	 	 	 i f ( v a r s . c u r r e n t I m a g e . a t t r ( ' t i t l e ' )   ! =   ' ' ) {  
 	 	 	 	 i f ( $ ( ' . n i v o - c a p t i o n ' ,   s l i d e r ) . c s s ( ' d i s p l a y ' )   = =   ' b l o c k ' ) {  
 	 	 	 	 	 $ ( ' . n i v o - c a p t i o n   p ' ,   s l i d e r ) . f a d e O u t ( s e t t i n g s . a n i m S p e e d ,   f u n c t i o n ( ) {  
 	 	 	 	 	 	 $ ( t h i s ) . h t m l ( v a r s . c u r r e n t I m a g e . a t t r ( ' t i t l e ' ) ) ;  
 	 	 	 	 	 	 $ ( t h i s ) . f a d e I n ( s e t t i n g s . a n i m S p e e d ) ;  
 	 	 	 	 	 } ) ;  
 	 	 	 	 }   e l s e   {  
 	 	 	 	 	 $ ( ' . n i v o - c a p t i o n   p ' ,   s l i d e r ) . h t m l ( v a r s . c u r r e n t I m a g e . a t t r ( ' t i t l e ' ) ) ;  
 	 	 	 	 } 	 	 	 	 	  
 	 	 	 	 $ ( ' . n i v o - c a p t i o n ' ,   s l i d e r ) . f a d e I n ( s e t t i n g s . a n i m S p e e d ) ;  
 	 	 	 }   e l s e   {  
 	 	 	 	 $ ( ' . n i v o - c a p t i o n ' ,   s l i d e r ) . f a d e O u t ( s e t t i n g s . a n i m S p e e d ) ;  
 	 	 	 }  
 	 	 	  
 	 	 	 / / S e t   n e w   s l i c e   b a c k g r o u n d s  
 	 	 	 v a r     i   =   0 ;  
 	 	 	 $ ( ' . n i v o - s l i c e ' ,   s l i d e r ) . e a c h ( f u n c t i o n ( ) {  
 	 	 	 	 v a r   s l i c e W i d t h   =   M a t h . r o u n d ( s l i d e r . w i d t h ( ) / s e t t i n g s . s l i c e s ) ;  
 	 	 	 	 $ ( t h i s ) . c s s ( {   h e i g h t : ' 0 p x ' ,   o p a c i t y : ' 0 ' ,    
 	 	 	 	 	 b a c k g r o u n d :   ' u r l ( ' +   v a r s . c u r r e n t I m a g e . a t t r ( ' s r c ' )   + ' )   n o - r e p e a t   - ' +   ( ( s l i c e W i d t h   +   ( i   *   s l i c e W i d t h ) )   -   s l i c e W i d t h )   + ' p x   0 % '   } ) ;  
 	 	 	 	 i + + ;  
 	 	 	 } ) ;  
 	 	 	  
 	 	 	 i f ( s e t t i n g s . e f f e c t   = =   ' r a n d o m ' ) {  
 	 	 	 	 v a r   a n i m s   =   n e w   A r r a y ( " s l i c e D o w n R i g h t " , " s l i c e D o w n L e f t " , " s l i c e U p R i g h t " , " s l i c e U p L e f t " , " s l i c e U p D o w n " , " s l i c e U p D o w n L e f t " , " f o l d " , " f a d e " ) ;  
 	 	 	 	 v a r s . r a n d A n i m   =   a n i m s [ M a t h . f l o o r ( M a t h . r a n d o m ( ) * ( a n i m s . l e n g t h   +   1 ) ) ] ;  
 	 	 	 	 i f ( v a r s . r a n d A n i m   = =   u n d e f i n e d )   v a r s . r a n d A n i m   =   ' f a d e ' ;  
 	 	 	 }  
 	 	  
 	 	 	 / / R u n   e f f e c t s  
 	 	 	 v a r s . r u n n i n g   =   t r u e ;  
 	 	 	 i f ( s e t t i n g s . e f f e c t   = =   ' s l i c e D o w n '   | |   s e t t i n g s . e f f e c t   = =   ' s l i c e D o w n R i g h t '   | |   v a r s . r a n d A n i m   = =   ' s l i c e D o w n R i g h t '   | |  
 	 	 	 	 s e t t i n g s . e f f e c t   = =   ' s l i c e D o w n L e f t '   | |   v a r s . r a n d A n i m   = =   ' s l i c e D o w n L e f t ' ) {  
 	 	 	 	 v a r   t i m e B u f f   =   0 ;  
 	 	 	 	 v a r   i   =   0 ;  
 	 	 	 	 v a r   s l i c e s   =   $ ( ' . n i v o - s l i c e ' ,   s l i d e r ) ;  
 	 	 	 	 i f ( s e t t i n g s . e f f e c t   = =   ' s l i c e D o w n L e f t '   | |   v a r s . r a n d A n i m   = =   ' s l i c e D o w n L e f t ' )   s l i c e s   =   $ ( ' . n i v o - s l i c e ' ,   s l i d e r ) . r e v e r s e ( ) ;  
 	 	 	 	 s l i c e s . e a c h ( f u n c t i o n ( ) {  
 	 	 	 	 	 v a r   s l i c e   =   $ ( t h i s ) ;  
 	 	 	 	 	 s l i c e . c s s ( ' t o p ' , ' 0 p x ' ) ;  
 	 	 	 	 	 i f ( i   = =   s e t t i n g s . s l i c e s - 1 ) {  
 	 	 	 	 	 	 s e t T i m e o u t ( f u n c t i o n ( ) {  
 	 	 	 	 	 	 	 s l i c e . a n i m a t e ( {   h e i g h t : ' 1 0 0 % ' ,   o p a c i t y : ' 1 . 0 '   } ,   s e t t i n g s . a n i m S p e e d ,   ' ' ,   f u n c t i o n ( ) {   s l i d e r . t r i g g e r ( ' n i v o : a n i m F i n i s h e d ' ) ;   } ) ;  
 	 	 	 	 	 	 } ,   ( 1 0 0   +   t i m e B u f f ) ) ;  
 	 	 	 	 	 }   e l s e   {  
 	 	 	 	 	 	 s e t T i m e o u t ( f u n c t i o n ( ) {  
 	 	 	 	 	 	 	 s l i c e . a n i m a t e ( {   h e i g h t : ' 1 0 0 % ' ,   o p a c i t y : ' 1 . 0 '   } ,   s e t t i n g s . a n i m S p e e d ) ;  
 	 	 	 	 	 	 } ,   ( 1 0 0   +   t i m e B u f f ) ) ;  
 	 	 	 	 	 }  
 	 	 	 	 	 t i m e B u f f   + =   5 0 ;  
 	 	 	 	 	 i + + ;  
 	 	 	 	 } ) ;  
 	 	 	 }    
 	 	 	 e l s e   i f ( s e t t i n g s . e f f e c t   = =   ' s l i c e U p '   | |   s e t t i n g s . e f f e c t   = =   ' s l i c e U p R i g h t '   | |   v a r s . r a n d A n i m   = =   ' s l i c e U p R i g h t '   | |  
 	 	 	 	 	 s e t t i n g s . e f f e c t   = =   ' s l i c e U p L e f t '   | |   v a r s . r a n d A n i m   = =   ' s l i c e U p L e f t ' ) {  
 	 	 	 	 v a r   t i m e B u f f   =   0 ;  
 	 	 	 	 v a r   i   =   0 ;  
 	 	 	 	 v a r   s l i c e s   =   $ ( ' . n i v o - s l i c e ' ,   s l i d e r ) ;  
 	 	 	 	 i f ( s e t t i n g s . e f f e c t   = =   ' s l i c e U p L e f t '   | |   v a r s . r a n d A n i m   = =   ' s l i c e U p L e f t ' )   s l i c e s   =   $ ( ' . n i v o - s l i c e ' ,   s l i d e r ) . r e v e r s e ( ) ;  
 	 	 	 	 s l i c e s . e a c h ( f u n c t i o n ( ) {  
 	 	 	 	 	 v a r   s l i c e   =   $ ( t h i s ) ;  
 	 	 	 	 	 s l i c e . c s s ( ' b o t t o m ' , ' 0 p x ' ) ;  
 	 	 	 	 	 i f ( i   = =   s e t t i n g s . s l i c e s - 1 ) {  
 	 	 	 	 	 	 s e t T i m e o u t ( f u n c t i o n ( ) {  
 	 	 	 	 	 	 	 s l i c e . a n i m a t e ( {   h e i g h t : ' 1 0 0 % ' ,   o p a c i t y : ' 1 . 0 '   } ,   s e t t i n g s . a n i m S p e e d ,   ' ' ,   f u n c t i o n ( ) {   s l i d e r . t r i g g e r ( ' n i v o : a n i m F i n i s h e d ' ) ;   } ) ;  
 	 	 	 	 	 	 } ,   ( 1 0 0   +   t i m e B u f f ) ) ;  
 	 	 	 	 	 }   e l s e   {  
 	 	 	 	 	 	 s e t T i m e o u t ( f u n c t i o n ( ) {  
 	 	 	 	 	 	 	 s l i c e . a n i m a t e ( {   h e i g h t : ' 1 0 0 % ' ,   o p a c i t y : ' 1 . 0 '   } ,   s e t t i n g s . a n i m S p e e d ) ;  
 	 	 	 	 	 	 } ,   ( 1 0 0   +   t i m e B u f f ) ) ;  
 	 	 	 	 	 }  
 	 	 	 	 	 t i m e B u f f   + =   5 0 ;  
 	 	 	 	 	 i + + ;  
 	 	 	 	 } ) ;  
 	 	 	 }    
 	 	 	 e l s e   i f ( s e t t i n g s . e f f e c t   = =   ' s l i c e U p D o w n '   | |   s e t t i n g s . e f f e c t   = =   ' s l i c e U p D o w n R i g h t '   | |   v a r s . r a n d A n i m   = =   ' s l i c e U p D o w n '   | |    
 	 	 	 	 	 s e t t i n g s . e f f e c t   = =   ' s l i c e U p D o w n L e f t '   | |   v a r s . r a n d A n i m   = =   ' s l i c e U p D o w n L e f t ' ) {  
 	 	 	 	 v a r   t i m e B u f f   =   0 ;  
 	 	 	 	 v a r   i   =   0 ;  
 	 	 	 	 v a r   v   =   0 ;  
 	 	 	 	 v a r   s l i c e s   =   $ ( ' . n i v o - s l i c e ' ,   s l i d e r ) ;  
 	 	 	 	 i f ( s e t t i n g s . e f f e c t   = =   ' s l i c e U p D o w n L e f t '   | |   v a r s . r a n d A n i m   = =   ' s l i c e U p D o w n L e f t ' )   s l i c e s   =   $ ( ' . n i v o - s l i c e ' ,   s l i d e r ) . r e v e r s e ( ) ;  
 	 	 	 	 s l i c e s . e a c h ( f u n c t i o n ( ) {  
 	 	 	 	 	 v a r   s l i c e   =   $ ( t h i s ) ;  
 	 	 	 	 	 i f ( i   = =   0 ) {  
 	 	 	 	 	 	 s l i c e . c s s ( ' t o p ' , ' 0 p x ' ) ;  
 	 	 	 	 	 	 i + + ;  
 	 	 	 	 	 }   e l s e   {  
 	 	 	 	 	 	 s l i c e . c s s ( ' b o t t o m ' , ' 0 p x ' ) ;  
 	 	 	 	 	 	 i   =   0 ;  
 	 	 	 	 	 }  
 	 	 	 	 	  
 	 	 	 	 	 i f ( v   = =   s e t t i n g s . s l i c e s - 1 ) {  
 	 	 	 	 	 	 s e t T i m e o u t ( f u n c t i o n ( ) {  
 	 	 	 	 	 	 	 s l i c e . a n i m a t e ( {   h e i g h t : ' 1 0 0 % ' ,   o p a c i t y : ' 1 . 0 '   } ,   s e t t i n g s . a n i m S p e e d ,   ' ' ,   f u n c t i o n ( ) {   s l i d e r . t r i g g e r ( ' n i v o : a n i m F i n i s h e d ' ) ;   } ) ;  
 	 	 	 	 	 	 } ,   ( 1 0 0   +   t i m e B u f f ) ) ;  
 	 	 	 	 	 }   e l s e   {  
 	 	 	 	 	 	 s e t T i m e o u t ( f u n c t i o n ( ) {  
 	 	 	 	 	 	 	 s l i c e . a n i m a t e ( {   h e i g h t : ' 1 0 0 % ' ,   o p a c i t y : ' 1 . 0 '   } ,   s e t t i n g s . a n i m S p e e d ) ;  
 	 	 	 	 	 	 } ,   ( 1 0 0   +   t i m e B u f f ) ) ;  
 	 	 	 	 	 }  
 	 	 	 	 	 t i m e B u f f   + =   5 0 ;  
 	 	 	 	 	 v + + ;  
 	 	 	 	 } ) ;  
 	 	 	 }    
 	 	 	 e l s e   i f ( s e t t i n g s . e f f e c t   = =   ' f o l d '   | |   v a r s . r a n d A n i m   = =   ' f o l d ' ) {  
 	 	 	 	 v a r   t i m e B u f f   =   0 ;  
 	 	 	 	 v a r   i   =   0 ;  
 	 	 	 	 $ ( ' . n i v o - s l i c e ' ,   s l i d e r ) . e a c h ( f u n c t i o n ( ) {  
 	 	 	 	 	 v a r   s l i c e   =   $ ( t h i s ) ;  
 	 	 	 	 	 v a r   o r i g W i d t h   =   s l i c e . w i d t h ( ) ;  
 	 	 	 	 	 s l i c e . c s s ( {   t o p : ' 0 p x ' ,   h e i g h t : ' 1 0 0 % ' ,   w i d t h : ' 0 p x '   } ) ;  
 	 	 	 	 	 i f ( i   = =   s e t t i n g s . s l i c e s - 1 ) {  
 	 	 	 	 	 	 s e t T i m e o u t ( f u n c t i o n ( ) {  
 	 	 	 	 	 	 	 s l i c e . a n i m a t e ( {   w i d t h : o r i g W i d t h ,   o p a c i t y : ' 1 . 0 '   } ,   s e t t i n g s . a n i m S p e e d ,   ' ' ,   f u n c t i o n ( ) {   s l i d e r . t r i g g e r ( ' n i v o : a n i m F i n i s h e d ' ) ;   } ) ;  
 	 	 	 	 	 	 } ,   ( 1 0 0   +   t i m e B u f f ) ) ;  
 	 	 	 	 	 }   e l s e   {  
 	 	 	 	 	 	 s e t T i m e o u t ( f u n c t i o n ( ) {  
 	 	 	 	 	 	 	 s l i c e . a n i m a t e ( {   w i d t h : o r i g W i d t h ,   o p a c i t y : ' 1 . 0 '   } ,   s e t t i n g s . a n i m S p e e d ) ;  
 	 	 	 	 	 	 } ,   ( 1 0 0   +   t i m e B u f f ) ) ;  
 	 	 	 	 	 }  
 	 	 	 	 	 t i m e B u f f   + =   5 0 ;  
 	 	 	 	 	 i + + ;  
 	 	 	 	 } ) ;  
 	 	 	 }      
 	 	 	 e l s e   i f ( s e t t i n g s . e f f e c t   = =   ' f a d e '   | |   v a r s . r a n d A n i m   = =   ' f a d e ' ) {  
 	 	 	 	 v a r   i   =   0 ;  
 	 	 	 	 $ ( ' . n i v o - s l i c e ' ,   s l i d e r ) . e a c h ( f u n c t i o n ( ) {  
 	 	 	 	 	 $ ( t h i s ) . c s s ( ' h e i g h t ' , ' 1 0 0 % ' ) ;  
 	 	 	 	 	 i f ( i   = =   s e t t i n g s . s l i c e s - 1 ) {  
 	 	 	 	 	 	 $ ( t h i s ) . a n i m a t e ( {   o p a c i t y : ' 1 . 0 '   } ,   ( s e t t i n g s . a n i m S p e e d * 2 ) ,   ' ' ,   f u n c t i o n ( ) {   s l i d e r . t r i g g e r ( ' n i v o : a n i m F i n i s h e d ' ) ;   } ) ;  
 	 	 	 	 	 }   e l s e   {  
 	 	 	 	 	 	 $ ( t h i s ) . a n i m a t e ( {   o p a c i t y : ' 1 . 0 '   } ,   ( s e t t i n g s . a n i m S p e e d * 2 ) ) ;  
 	 	 	 	 	 }  
 	 	 	 	 	 i + + ;  
 	 	 	 	 } ) ;  
 	 	 	 }  
 	 	 }  
 	 } ;  
 	  
 	 / / D e f a u l t   s e t t i n g s  
 	 $ . f n . n i v o S l i d e r . d e f a u l t s   =   {  
 	 	 e f f e c t : ' r a n d o m ' ,  
 	 	 s l i c e s : 1 5 ,  
 	 	 a n i m S p e e d : 5 0 0 ,  
 	 	 p a u s e T i m e : 3 0 0 0 ,  
 	 	 d i r e c t i o n N a v : t r u e ,  
 	 	 d i r e c t i o n N a v H i d e : t r u e ,  
 	 	 c o n t r o l N a v : t r u e ,  
 	 	 k e y b o a r d N a v : t r u e ,  
 	 	 p a u s e O n H o v e r : t r u e ,  
 	 	 m a n u a l A d v a n c e : f a l s e ,  
 	 	 c a p t i o n O p a c i t y : 0 . 8 ,  
 	 	 b e f o r e C h a n g e :   f u n c t i o n ( ) { } ,  
 	 	 a f t e r C h a n g e :   f u n c t i o n ( ) { } ,  
 	 	 s l i d e s h o w E n d :   f u n c t i o n ( ) { }  
 	 } ;  
 	  
 	 $ . f n . r e v e r s e   =   [ ] . r e v e r s e ;  
 	  
 } ) ( j Q u e r y ) ;  
  
  
  
 / *   - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
   *   	 C l a s s :   p r e t t y P h o t o  
   *   	 U s e :   L i g h t b o x   c l o n e   f o r   j Q u e r y  
   *   	 A u t h o r :   S t e p h a n e   C a r o n   ( h t t p : / / w w w . n o - m a r g i n - f o r - e r r o r s . c o m )  
   *   	 V e r s i o n :   2 . 5 . 6  
   - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -   * /  
  
 ( f u n c t i o n ( $ ) { $ . p r e t t y P h o t o = { v e r s i o n : ' 2 . 5 . 6 ' } ; $ . f n . p r e t t y P h o t o = f u n c t i o n ( s e t t i n g s ) { s e t t i n g s = j Q u e r y . e x t e n d ( { a n i m a t i o n S p e e d : ' n o r m a l ' , o p a c i t y : 0 . 8 0 , s h o w T i t l e : t r u e , a l l o w r e s i z e : t r u e , d e f a u l t _ w i d t h : 5 0 0 , d e f a u l t _ h e i g h t : 3 4 4 , c o u n t e r _ s e p a r a t o r _ l a b e l : ' / ' , t h e m e : ' l i g h t _ r o u n d e d ' , h i d e f l a s h : f a l s e , w m o d e : ' o p a q u e ' , a u t o p l a y : t r u e , m o d a l : f a l s e , c h a n g e p i c t u r e c a l l b a c k : f u n c t i o n ( ) { } , c a l l b a c k : f u n c t i o n ( ) { } , m a r k u p : ' < d i v   c l a s s = " p p _ p i c _ h o l d e r " >   \  
             < d i v   c l a s s = " p p _ t o p " >   \  
               < d i v   c l a s s = " p p _ l e f t " > < / d i v >   \  
               < d i v   c l a s s = " p p _ m i d d l e " > < / d i v >   \  
               < d i v   c l a s s = " p p _ r i g h t " > < / d i v >   \  
             < / d i v >   \  
             < d i v   c l a s s = " p p _ c o n t e n t _ c o n t a i n e r " >   \  
               < d i v   c l a s s = " p p _ l e f t " >   \  
               < d i v   c l a s s = " p p _ r i g h t " >   \  
                 < d i v   c l a s s = " p p _ c o n t e n t " >   \  
                   < d i v   c l a s s = " p p _ l o a d e r I c o n " > < / d i v >   \  
                   < d i v   c l a s s = " p p _ f a d e " >   \  
                     < a   h r e f = " # "   c l a s s = " p p _ e x p a n d "   t i t l e = " E x p a n d   t h e   i m a g e " > E x p a n d < / a >   \  
                     < d i v   c l a s s = " p p _ h o v e r C o n t a i n e r " >   \  
                       < a   c l a s s = " p p _ n e x t "   h r e f = " # " > n e x t < / a >   \  
                       < a   c l a s s = " p p _ p r e v i o u s "   h r e f = " # " > p r e v i o u s < / a >   \  
                     < / d i v >   \  
                     < d i v   i d = " p p _ f u l l _ r e s " > < / d i v >   \  
                     < d i v   c l a s s = " p p _ d e t a i l s   c l e a r f i x " >   \  
                       < a   c l a s s = " p p _ c l o s e "   h r e f = " # " > C l o s e < / a >   \  
                       < p   c l a s s = " p p _ d e s c r i p t i o n " > < / p >   \  
                       < d i v   c l a s s = " p p _ n a v " >   \  
                         < a   h r e f = " # "   c l a s s = " p p _ a r r o w _ p r e v i o u s " > P r e v i o u s < / a >   \  
                         < p   c l a s s = " c u r r e n t T e x t H o l d e r " > 0 / 0 < / p >   \  
                         < a   h r e f = " # "   c l a s s = " p p _ a r r o w _ n e x t " > N e x t < / a >   \  
                       < / d i v >   \  
                     < / d i v >   \  
                   < / d i v >   \  
                 < / d i v >   \  
               < / d i v >   \  
               < / d i v >   \  
             < / d i v >   \  
             < d i v   c l a s s = " p p _ b o t t o m " >   \  
               < d i v   c l a s s = " p p _ l e f t " > < / d i v >   \  
               < d i v   c l a s s = " p p _ m i d d l e " > < / d i v >   \  
               < d i v   c l a s s = " p p _ r i g h t " > < / d i v >   \  
             < / d i v >   \  
           < / d i v >   \  
           < d i v   c l a s s = " p p _ o v e r l a y " > < / d i v >   \  
           < d i v   c l a s s = " p p t " > < / d i v > ' , i m a g e _ m a r k u p : ' < i m g   i d = " f u l l R e s I m a g e "   s r c = " "   / > ' , f l a s h _ m a r k u p : ' < o b j e c t   c l a s s i d = " c l s i d : D 2 7 C D B 6 E - A E 6 D - 1 1 c f - 9 6 B 8 - 4 4 4 5 5 3 5 4 0 0 0 0 "   w i d t h = " { w i d t h } "   h e i g h t = " { h e i g h t } " > < p a r a m   n a m e = " w m o d e "   v a l u e = " { w m o d e } "   / > < p a r a m   n a m e = " a l l o w f u l l s c r e e n "   v a l u e = " t r u e "   / > < p a r a m   n a m e = " a l l o w s c r i p t a c c e s s "   v a l u e = " a l w a y s "   / > < p a r a m   n a m e = " m o v i e "   v a l u e = " { p a t h } "   / > < e m b e d   s r c = " { p a t h } "   t y p e = " a p p l i c a t i o n / x - s h o c k w a v e - f l a s h "   a l l o w f u l l s c r e e n = " t r u e "   a l l o w s c r i p t a c c e s s = " a l w a y s "   w i d t h = " { w i d t h } "   h e i g h t = " { h e i g h t } "   w m o d e = " { w m o d e } " > < / e m b e d > < / o b j e c t > ' , q u i c k t i m e _ m a r k u p : ' < o b j e c t   c l a s s i d = " c l s i d : 0 2 B F 2 5 D 5 - 8 C 1 7 - 4 B 2 3 - B C 8 0 - D 3 4 8 8 A B D D C 6 B "   c o d e b a s e = " h t t p : / / w w w . a p p l e . c o m / q t a c t i v e x / q t p l u g i n . c a b "   h e i g h t = " { h e i g h t } "   w i d t h = " { w i d t h } " > < p a r a m   n a m e = " s r c "   v a l u e = " { p a t h } " > < p a r a m   n a m e = " a u t o p l a y "   v a l u e = " { a u t o p l a y } " > < p a r a m   n a m e = " t y p e "   v a l u e = " v i d e o / q u i c k t i m e " > < e m b e d   s r c = " { p a t h } "   h e i g h t = " { h e i g h t } "   w i d t h = " { w i d t h } "   a u t o p l a y = " { a u t o p l a y } "   t y p e = " v i d e o / q u i c k t i m e "   p l u g i n s p a g e = " h t t p : / / w w w . a p p l e . c o m / q u i c k t i m e / d o w n l o a d / " > < / e m b e d > < / o b j e c t > ' , i f r a m e _ m a r k u p : ' < i f r a m e   s r c   = " { p a t h } "   w i d t h = " { w i d t h } "   h e i g h t = " { h e i g h t } "   f r a m e b o r d e r = " n o " > < / i f r a m e > ' , i n l i n e _ m a r k u p : ' < d i v   c l a s s = " p p _ i n l i n e   c l e a r f i x " > { c o n t e n t } < / d i v > ' } , s e t t i n g s ) ; i f ( $ . b r o w s e r . m s i e & & p a r s e I n t ( $ . b r o w s e r . v e r s i o n ) = = 6 ) { s e t t i n g s . t h e m e = " l i g h t _ s q u a r e " ; }  
 i f ( $ ( ' . p p _ o v e r l a y ' ) . s i z e ( ) = = 0 ) _ b u i l d O v e r l a y ( ) ; v a r   d o r e s i z e = t r u e , p e r c e n t B a s e d = f a l s e , c o r r e c t S i z e s , $ p p _ p i c _ h o l d e r , $ p p t , $ p p _ o v e r l a y , p p _ c o n t e n t H e i g h t , p p _ c o n t e n t W i d t h , p p _ c o n t a i n e r H e i g h t , p p _ c o n t a i n e r W i d t h , w i n d o w H e i g h t = $ ( w i n d o w ) . h e i g h t ( ) , w i n d o w W i d t h = $ ( w i n d o w ) . w i d t h ( ) , s e t P o s i t i o n = 0 , s c r o l l P o s = _ g e t S c r o l l ( ) ; $ ( w i n d o w ) . s c r o l l ( f u n c t i o n ( ) { s c r o l l P o s = _ g e t S c r o l l ( ) ; _ c e n t e r O v e r l a y ( ) ; _ r e s i z e O v e r l a y ( ) ; } ) ; $ ( w i n d o w ) . r e s i z e ( f u n c t i o n ( ) { _ c e n t e r O v e r l a y ( ) ; _ r e s i z e O v e r l a y ( ) ; } ) ; $ ( d o c u m e n t ) . k e y d o w n ( f u n c t i o n ( e ) { i f ( $ p p _ p i c _ h o l d e r . i s ( ' : v i s i b l e ' ) )  
 s w i t c h ( e . k e y C o d e ) { c a s e   3 7 : $ . p r e t t y P h o t o . c h a n g e P a g e ( ' p r e v i o u s ' ) ; b r e a k ; c a s e   3 9 : $ . p r e t t y P h o t o . c h a n g e P a g e ( ' n e x t ' ) ; b r e a k ; c a s e   2 7 : i f ( ! s e t t i n g s . m o d a l )  
 $ . p r e t t y P h o t o . c l o s e ( ) ; b r e a k ; } ; } ) ; $ ( t h i s ) . e a c h ( f u n c t i o n ( ) { $ ( t h i s ) . b i n d ( ' c l i c k ' , f u n c t i o n ( ) { _ s e l f = t h i s ; t h e R e l = $ ( t h i s ) . a t t r ( ' r e l ' ) ; g a l l e r y R e g E x p = / \ [ ( ? : . * ) \ ] / ; t h e G a l l e r y = g a l l e r y R e g E x p . e x e c ( t h e R e l ) ; v a r   i m a g e s = n e w   A r r a y ( ) , t i t l e s = n e w   A r r a y ( ) , d e s c r i p t i o n s = n e w   A r r a y ( ) ; i f ( t h e G a l l e r y ) { $ ( ' a [ r e l * = ' + t h e G a l l e r y + ' ] ' ) . e a c h ( f u n c t i o n ( i ) { i f ( $ ( t h i s ) [ 0 ] = = = $ ( _ s e l f ) [ 0 ] ) s e t P o s i t i o n = i ; i m a g e s . p u s h ( $ ( t h i s ) . a t t r ( ' h r e f ' ) ) ; t i t l e s . p u s h ( $ ( t h i s ) . f i n d ( ' i m g ' ) . a t t r ( ' a l t ' ) ) ; d e s c r i p t i o n s . p u s h ( $ ( t h i s ) . a t t r ( ' t i t l e ' ) ) ; } ) ; } e l s e { i m a g e s = $ ( t h i s ) . a t t r ( ' h r e f ' ) ; t i t l e s = ( $ ( t h i s ) . f i n d ( ' i m g ' ) . a t t r ( ' a l t ' ) ) ? $ ( t h i s ) . f i n d ( ' i m g ' ) . a t t r ( ' a l t ' ) : ' ' ; d e s c r i p t i o n s = ( $ ( t h i s ) . a t t r ( ' t i t l e ' ) ) ? $ ( t h i s ) . a t t r ( ' t i t l e ' ) : ' ' ; }  
 $ . p r e t t y P h o t o . o p e n ( i m a g e s , t i t l e s , d e s c r i p t i o n s ) ; r e t u r n   f a l s e ; } ) ; } ) ; $ . p r e t t y P h o t o . o p e n = f u n c t i o n ( g a l l e r y _ i m a g e s , g a l l e r y _ t i t l e s , g a l l e r y _ d e s c r i p t i o n s ) { i f ( $ . b r o w s e r . m s i e & & $ . b r o w s e r . v e r s i o n = = 6 ) { $ ( ' s e l e c t ' ) . c s s ( ' v i s i b i l i t y ' , ' h i d d e n ' ) ; } ; i f ( s e t t i n g s . h i d e f l a s h ) $ ( ' o b j e c t , e m b e d ' ) . c s s ( ' v i s i b i l i t y ' , ' h i d d e n ' ) ; i m a g e s = $ . m a k e A r r a y ( g a l l e r y _ i m a g e s ) ; t i t l e s = $ . m a k e A r r a y ( g a l l e r y _ t i t l e s ) ; d e s c r i p t i o n s = $ . m a k e A r r a y ( g a l l e r y _ d e s c r i p t i o n s ) ; i m a g e _ s e t = ( $ ( i m a g e s ) . s i z e ( ) > 0 ) ? t r u e : f a l s e ; _ c h e c k P o s i t i o n ( $ ( i m a g e s ) . s i z e ( ) ) ; $ ( ' . p p _ l o a d e r I c o n ' ) . s h o w ( ) ; $ p p _ o v e r l a y . s h o w ( ) . f a d e T o ( s e t t i n g s . a n i m a t i o n S p e e d , s e t t i n g s . o p a c i t y ) ; $ p p _ p i c _ h o l d e r . f i n d ( ' . c u r r e n t T e x t H o l d e r ' ) . t e x t ( ( s e t P o s i t i o n + 1 ) + s e t t i n g s . c o u n t e r _ s e p a r a t o r _ l a b e l + $ ( i m a g e s ) . s i z e ( ) ) ; i f ( d e s c r i p t i o n s [ s e t P o s i t i o n ] ) { $ p p _ p i c _ h o l d e r . f i n d ( ' . p p _ d e s c r i p t i o n ' ) . s h o w ( ) . h t m l ( u n e s c a p e ( d e s c r i p t i o n s [ s e t P o s i t i o n ] ) ) ; } e l s e { $ p p _ p i c _ h o l d e r . f i n d ( ' . p p _ d e s c r i p t i o n ' ) . h i d e ( ) . t e x t ( ' ' ) ; } ; i f ( t i t l e s [ s e t P o s i t i o n ] & & s e t t i n g s . s h o w T i t l e ) { h a s T i t l e = t r u e ; $ p p t . h t m l ( u n e s c a p e ( t i t l e s [ s e t P o s i t i o n ] ) ) ; } e l s e { h a s T i t l e = f a l s e ; } ; m o v i e _ w i d t h = ( p a r s e F l o a t ( g r a b _ p a r a m ( ' w i d t h ' , i m a g e s [ s e t P o s i t i o n ] ) ) ) ? g r a b _ p a r a m ( ' w i d t h ' , i m a g e s [ s e t P o s i t i o n ] ) : s e t t i n g s . d e f a u l t _ w i d t h . t o S t r i n g ( ) ; m o v i e _ h e i g h t = ( p a r s e F l o a t ( g r a b _ p a r a m ( ' h e i g h t ' , i m a g e s [ s e t P o s i t i o n ] ) ) ) ? g r a b _ p a r a m ( ' h e i g h t ' , i m a g e s [ s e t P o s i t i o n ] ) : s e t t i n g s . d e f a u l t _ h e i g h t . t o S t r i n g ( ) ; i f ( m o v i e _ w i d t h . i n d e x O f ( ' % ' ) ! = - 1 | | m o v i e _ h e i g h t . i n d e x O f ( ' % ' ) ! = - 1 ) { m o v i e _ h e i g h t = p a r s e F l o a t ( ( $ ( w i n d o w ) . h e i g h t ( ) * p a r s e F l o a t ( m o v i e _ h e i g h t ) / 1 0 0 ) - 1 0 0 ) ; m o v i e _ w i d t h = p a r s e F l o a t ( ( $ ( w i n d o w ) . w i d t h ( ) * p a r s e F l o a t ( m o v i e _ w i d t h ) / 1 0 0 ) - 1 0 0 ) ; p e r c e n t B a s e d = t r u e ; }  
 $ p p _ p i c _ h o l d e r . f a d e I n ( f u n c t i o n ( ) { i m g P r e l o a d e r = " " ; s w i t c h ( _ g e t F i l e T y p e ( i m a g e s [ s e t P o s i t i o n ] ) ) { c a s e ' i m a g e ' : i m g P r e l o a d e r = n e w   I m a g e ( ) ; n e x t I m a g e = n e w   I m a g e ( ) ; i f ( i m a g e _ s e t & & s e t P o s i t i o n > $ ( i m a g e s ) . s i z e ( ) ) n e x t I m a g e . s r c = i m a g e s [ s e t P o s i t i o n + 1 ] ; p r e v I m a g e = n e w   I m a g e ( ) ; i f ( i m a g e _ s e t & & i m a g e s [ s e t P o s i t i o n - 1 ] ) p r e v I m a g e . s r c = i m a g e s [ s e t P o s i t i o n - 1 ] ; $ p p _ p i c _ h o l d e r . f i n d ( ' # p p _ f u l l _ r e s ' ) [ 0 ] . i n n e r H T M L = s e t t i n g s . i m a g e _ m a r k u p ; $ p p _ p i c _ h o l d e r . f i n d ( ' # f u l l R e s I m a g e ' ) . a t t r ( ' s r c ' , i m a g e s [ s e t P o s i t i o n ] ) ; i m g P r e l o a d e r . o n l o a d = f u n c t i o n ( ) { c o r r e c t S i z e s = _ f i t T o V i e w p o r t ( i m g P r e l o a d e r . w i d t h , i m g P r e l o a d e r . h e i g h t ) ; _ s h o w C o n t e n t ( ) ; } ; i m g P r e l o a d e r . o n e r r o r = f u n c t i o n ( ) { a l e r t ( ' I m a g e   c a n n o t   b e   l o a d e d .   M a k e   s u r e   t h e   p a t h   i s   c o r r e c t   a n d   i m a g e   e x i s t . ' ) ; $ . p r e t t y P h o t o . c l o s e ( ) ; } ; i m g P r e l o a d e r . s r c = i m a g e s [ s e t P o s i t i o n ] ; b r e a k ; c a s e ' y o u t u b e ' : c o r r e c t S i z e s = _ f i t T o V i e w p o r t ( m o v i e _ w i d t h , m o v i e _ h e i g h t ) ; m o v i e = ' h t t p : / / w w w . y o u t u b e . c o m / v / ' + g r a b _ p a r a m ( ' v ' , i m a g e s [ s e t P o s i t i o n ] ) ; i f ( s e t t i n g s . a u t o p l a y ) m o v i e + = " & a u t o p l a y = 1 " ; t o I n j e c t = s e t t i n g s . f l a s h _ m a r k u p . r e p l a c e ( / { w i d t h } / g , c o r r e c t S i z e s [ ' w i d t h ' ] ) . r e p l a c e ( / { h e i g h t } / g , c o r r e c t S i z e s [ ' h e i g h t ' ] ) . r e p l a c e ( / { w m o d e } / g , s e t t i n g s . w m o d e ) . r e p l a c e ( / { p a t h } / g , m o v i e ) ; b r e a k ; c a s e ' v i m e o ' : c o r r e c t S i z e s = _ f i t T o V i e w p o r t ( m o v i e _ w i d t h , m o v i e _ h e i g h t ) ; m o v i e _ i d = i m a g e s [ s e t P o s i t i o n ] ; m o v i e = ' h t t p : / / v i m e o . c o m / m o o g a l o o p . s w f ? c l i p _ i d = ' + m o v i e _ i d . r e p l a c e ( ' h t t p : / / v i m e o . c o m / ' , ' ' ) ; i f ( s e t t i n g s . a u t o p l a y ) m o v i e + = " & a u t o p l a y = 1 " ; t o I n j e c t = s e t t i n g s . f l a s h _ m a r k u p . r e p l a c e ( / { w i d t h } / g , c o r r e c t S i z e s [ ' w i d t h ' ] ) . r e p l a c e ( / { h e i g h t } / g , c o r r e c t S i z e s [ ' h e i g h t ' ] ) . r e p l a c e ( / { w m o d e } / g , s e t t i n g s . w m o d e ) . r e p l a c e ( / { p a t h } / g , m o v i e ) ; b r e a k ; c a s e ' q u i c k t i m e ' : c o r r e c t S i z e s = _ f i t T o V i e w p o r t ( m o v i e _ w i d t h , m o v i e _ h e i g h t ) ; c o r r e c t S i z e s [ ' h e i g h t ' ] + = 1 5 ; c o r r e c t S i z e s [ ' c o n t e n t H e i g h t ' ] + = 1 5 ; c o r r e c t S i z e s [ ' c o n t a i n e r H e i g h t ' ] + = 1 5 ; t o I n j e c t = s e t t i n g s . q u i c k t i m e _ m a r k u p . r e p l a c e ( / { w i d t h } / g , c o r r e c t S i z e s [ ' w i d t h ' ] ) . r e p l a c e ( / { h e i g h t } / g , c o r r e c t S i z e s [ ' h e i g h t ' ] ) . r e p l a c e ( / { w m o d e } / g , s e t t i n g s . w m o d e ) . r e p l a c e ( / { p a t h } / g , i m a g e s [ s e t P o s i t i o n ] ) . r e p l a c e ( / { a u t o p l a y } / g , s e t t i n g s . a u t o p l a y ) ; b r e a k ; c a s e ' f l a s h ' : c o r r e c t S i z e s = _ f i t T o V i e w p o r t ( m o v i e _ w i d t h , m o v i e _ h e i g h t ) ; f l a s h _ v a r s = i m a g e s [ s e t P o s i t i o n ] ; f l a s h _ v a r s = f l a s h _ v a r s . s u b s t r i n g ( i m a g e s [ s e t P o s i t i o n ] . i n d e x O f ( ' f l a s h v a r s ' ) + 1 0 , i m a g e s [ s e t P o s i t i o n ] . l e n g t h ) ; f i l e n a m e = i m a g e s [ s e t P o s i t i o n ] ; f i l e n a m e = f i l e n a m e . s u b s t r i n g ( 0 , f i l e n a m e . i n d e x O f ( ' ? ' ) ) ; t o I n j e c t = s e t t i n g s . f l a s h _ m a r k u p . r e p l a c e ( / { w i d t h } / g , c o r r e c t S i z e s [ ' w i d t h ' ] ) . r e p l a c e ( / { h e i g h t } / g , c o r r e c t S i z e s [ ' h e i g h t ' ] ) . r e p l a c e ( / { w m o d e } / g , s e t t i n g s . w m o d e ) . r e p l a c e ( / { p a t h } / g , f i l e n a m e + ' ? ' + f l a s h _ v a r s ) ; b r e a k ; c a s e ' i f r a m e ' : c o r r e c t S i z e s = _ f i t T o V i e w p o r t ( m o v i e _ w i d t h , m o v i e _ h e i g h t ) ; f r a m e _ u r l = i m a g e s [ s e t P o s i t i o n ] ; f r a m e _ u r l = f r a m e _ u r l . s u b s t r ( 0 , f r a m e _ u r l . i n d e x O f ( ' i f r a m e ' ) - 1 ) ; t o I n j e c t = s e t t i n g s . i f r a m e _ m a r k u p . r e p l a c e ( / { w i d t h } / g , c o r r e c t S i z e s [ ' w i d t h ' ] ) . r e p l a c e ( / { h e i g h t } / g , c o r r e c t S i z e s [ ' h e i g h t ' ] ) . r e p l a c e ( / { p a t h } / g , f r a m e _ u r l ) ; b r e a k ; c a s e ' i n l i n e ' : m y C l o n e = $ ( i m a g e s [ s e t P o s i t i o n ] ) . c l o n e ( ) . c s s ( { ' w i d t h ' : s e t t i n g s . d e f a u l t _ w i d t h } ) . w r a p I n n e r ( ' < d i v   i d = " p p _ f u l l _ r e s " > < d i v   c l a s s = " p p _ i n l i n e   c l e a r f i x " > < / d i v > < / d i v > ' ) . a p p e n d T o ( $ ( ' b o d y ' ) ) ; c o r r e c t S i z e s = _ f i t T o V i e w p o r t ( $ ( m y C l o n e ) . w i d t h ( ) , $ ( m y C l o n e ) . h e i g h t ( ) ) ; $ ( m y C l o n e ) . r e m o v e ( ) ; t o I n j e c t = s e t t i n g s . i n l i n e _ m a r k u p . r e p l a c e ( / { c o n t e n t } / g , $ ( i m a g e s [ s e t P o s i t i o n ] ) . h t m l ( ) ) ; b r e a k ; } ; i f ( ! i m g P r e l o a d e r ) { $ p p _ p i c _ h o l d e r . f i n d ( ' # p p _ f u l l _ r e s ' ) [ 0 ] . i n n e r H T M L = t o I n j e c t ; _ s h o w C o n t e n t ( ) ; } ; } ) ; } ; $ . p r e t t y P h o t o . c h a n g e P a g e = f u n c t i o n ( d i r e c t i o n ) { i f ( d i r e c t i o n = = ' p r e v i o u s ' ) { s e t P o s i t i o n - - ; i f ( s e t P o s i t i o n < 0 ) { s e t P o s i t i o n = 0 ; r e t u r n ; } ; } e l s e { i f ( $ ( ' . p p _ a r r o w _ n e x t ' ) . i s ( ' . d i s a b l e d ' ) ) r e t u r n ; s e t P o s i t i o n + + ; } ; i f ( ! d o r e s i z e ) d o r e s i z e = t r u e ; _ h i d e C o n t e n t ( f u n c t i o n ( ) { $ . p r e t t y P h o t o . o p e n ( i m a g e s , t i t l e s , d e s c r i p t i o n s ) } ) ; $ ( ' a . p p _ e x p a n d , a . p p _ c o n t r a c t ' ) . f a d e O u t ( s e t t i n g s . a n i m a t i o n S p e e d ) ; } ; $ . p r e t t y P h o t o . c l o s e = f u n c t i o n ( ) { $ p p _ p i c _ h o l d e r . f i n d ( ' o b j e c t , e m b e d ' ) . c s s ( ' v i s i b i l i t y ' , ' h i d d e n ' ) ; $ ( ' d i v . p p _ p i c _ h o l d e r , d i v . p p t , . p p _ f a d e ' ) . f a d e O u t ( s e t t i n g s . a n i m a t i o n S p e e d ) ; $ p p _ o v e r l a y . f a d e O u t ( s e t t i n g s . a n i m a t i o n S p e e d , f u n c t i o n ( ) { $ ( ' # p p _ f u l l _ r e s ' ) . h t m l ( ' ' ) ; $ p p _ p i c _ h o l d e r . a t t r ( ' s t y l e ' , ' ' ) . f i n d ( ' d i v : n o t ( . p p _ h o v e r C o n t a i n e r ) ' ) . a t t r ( ' s t y l e ' , ' ' ) ; _ c e n t e r O v e r l a y ( ) ; i f ( $ . b r o w s e r . m s i e & & $ . b r o w s e r . v e r s i o n = = 6 ) { $ ( ' s e l e c t ' ) . c s s ( ' v i s i b i l i t y ' , ' v i s i b l e ' ) ; } ; i f ( s e t t i n g s . h i d e f l a s h ) $ ( ' o b j e c t , e m b e d ' ) . c s s ( ' v i s i b i l i t y ' , ' v i s i b l e ' ) ; s e t P o s i t i o n = 0 ; s e t t i n g s . c a l l b a c k ( ) ; } ) ; d o r e s i z e = t r u e ; } ; _ s h o w C o n t e n t = f u n c t i o n ( ) { $ ( ' . p p _ l o a d e r I c o n ' ) . h i d e ( ) ; p r o j e c t e d T o p = s c r o l l P o s [ ' s c r o l l T o p ' ] + ( ( w i n d o w H e i g h t / 2 ) - ( c o r r e c t S i z e s [ ' c o n t a i n e r H e i g h t ' ] / 2 ) ) ; i f ( p r o j e c t e d T o p < 0 ) p r o j e c t e d T o p = 0 + $ p p t . h e i g h t ( ) ; $ p p _ p i c _ h o l d e r . f i n d ( ' . p p _ c o n t e n t ' ) . a n i m a t e ( { ' h e i g h t ' : c o r r e c t S i z e s [ ' c o n t e n t H e i g h t ' ] } , s e t t i n g s . a n i m a t i o n S p e e d ) ; $ p p _ p i c _ h o l d e r . a n i m a t e ( { ' t o p ' : p r o j e c t e d T o p , ' l e f t ' : ( w i n d o w W i d t h / 2 ) - ( c o r r e c t S i z e s [ ' c o n t a i n e r W i d t h ' ] / 2 ) , ' w i d t h ' : c o r r e c t S i z e s [ ' c o n t a i n e r W i d t h ' ] } , s e t t i n g s . a n i m a t i o n S p e e d , f u n c t i o n ( ) { $ p p _ p i c _ h o l d e r . f i n d ( ' . p p _ h o v e r C o n t a i n e r , # f u l l R e s I m a g e ' ) . h e i g h t ( c o r r e c t S i z e s [ ' h e i g h t ' ] ) . w i d t h ( c o r r e c t S i z e s [ ' w i d t h ' ] ) ; $ p p _ p i c _ h o l d e r . f i n d ( ' . p p _ f a d e ' ) . f a d e I n ( s e t t i n g s . a n i m a t i o n S p e e d ) ; i f ( i m a g e _ s e t & & _ g e t F i l e T y p e ( i m a g e s [ s e t P o s i t i o n ] ) = = " i m a g e " ) { $ p p _ p i c _ h o l d e r . f i n d ( ' . p p _ h o v e r C o n t a i n e r ' ) . s h o w ( ) ; } e l s e { $ p p _ p i c _ h o l d e r . f i n d ( ' . p p _ h o v e r C o n t a i n e r ' ) . h i d e ( ) ; }  
 i f ( s e t t i n g s . s h o w T i t l e & & h a s T i t l e ) { $ p p t . c s s ( { ' t o p ' : $ p p _ p i c _ h o l d e r . o f f s e t ( ) . t o p - 2 5 , ' l e f t ' : $ p p _ p i c _ h o l d e r . o f f s e t ( ) . l e f t + 2 0 , ' d i s p l a y ' : ' n o n e ' } ) ; $ p p t . f a d e I n ( s e t t i n g s . a n i m a t i o n S p e e d ) ; } ; i f ( c o r r e c t S i z e s [ ' r e s i z e d ' ] ) $ ( ' a . p p _ e x p a n d , a . p p _ c o n t r a c t ' ) . f a d e I n ( s e t t i n g s . a n i m a t i o n S p e e d ) ; s e t t i n g s . c h a n g e p i c t u r e c a l l b a c k ( ) ; } ) ; } ; f u n c t i o n   _ h i d e C o n t e n t ( c a l l b a c k ) { $ p p _ p i c _ h o l d e r . f i n d ( ' # p p _ f u l l _ r e s   o b j e c t , # p p _ f u l l _ r e s   e m b e d ' ) . c s s ( ' v i s i b i l i t y ' , ' h i d d e n ' ) ; $ p p _ p i c _ h o l d e r . f i n d ( ' . p p _ f a d e ' ) . f a d e O u t ( s e t t i n g s . a n i m a t i o n S p e e d , f u n c t i o n ( ) { $ ( ' . p p _ l o a d e r I c o n ' ) . s h o w ( ) ; i f ( c a l l b a c k ) c a l l b a c k ( ) ; } ) ; $ p p t . f a d e O u t ( s e t t i n g s . a n i m a t i o n S p e e d ) ; }  
 f u n c t i o n   _ c h e c k P o s i t i o n ( s e t C o u n t ) { i f ( s e t P o s i t i o n = = s e t C o u n t - 1 ) { $ p p _ p i c _ h o l d e r . f i n d ( ' a . p p _ n e x t ' ) . c s s ( ' v i s i b i l i t y ' , ' h i d d e n ' ) ; $ p p _ p i c _ h o l d e r . f i n d ( ' a . p p _ a r r o w _ n e x t ' ) . a d d C l a s s ( ' d i s a b l e d ' ) . u n b i n d ( ' c l i c k ' ) ; } e l s e { $ p p _ p i c _ h o l d e r . f i n d ( ' a . p p _ n e x t ' ) . c s s ( ' v i s i b i l i t y ' , ' v i s i b l e ' ) ; $ p p _ p i c _ h o l d e r . f i n d ( ' a . p p _ a r r o w _ n e x t . d i s a b l e d ' ) . r e m o v e C l a s s ( ' d i s a b l e d ' ) . b i n d ( ' c l i c k ' , f u n c t i o n ( ) { $ . p r e t t y P h o t o . c h a n g e P a g e ( ' n e x t ' ) ; r e t u r n   f a l s e ; } ) ; } ; i f ( s e t P o s i t i o n = = 0 ) { $ p p _ p i c _ h o l d e r . f i n d ( ' a . p p _ p r e v i o u s ' ) . c s s ( ' v i s i b i l i t y ' , ' h i d d e n ' ) ; $ p p _ p i c _ h o l d e r . f i n d ( ' a . p p _ a r r o w _ p r e v i o u s ' ) . a d d C l a s s ( ' d i s a b l e d ' ) . u n b i n d ( ' c l i c k ' ) ; } e l s e { $ p p _ p i c _ h o l d e r . f i n d ( ' a . p p _ p r e v i o u s ' ) . c s s ( ' v i s i b i l i t y ' , ' v i s i b l e ' ) ; $ p p _ p i c _ h o l d e r . f i n d ( ' a . p p _ a r r o w _ p r e v i o u s . d i s a b l e d ' ) . r e m o v e C l a s s ( ' d i s a b l e d ' ) . b i n d ( ' c l i c k ' , f u n c t i o n ( ) { $ . p r e t t y P h o t o . c h a n g e P a g e ( ' p r e v i o u s ' ) ; r e t u r n   f a l s e ; } ) ; } ; i f ( s e t C o u n t > 1 ) { $ ( ' . p p _ n a v ' ) . s h o w ( ) ; } e l s e { $ ( ' . p p _ n a v ' ) . h i d e ( ) ; } } ; f u n c t i o n   _ f i t T o V i e w p o r t ( w i d t h , h e i g h t ) { h a s B e e n R e s i z e d = f a l s e ; _ g e t D i m e n s i o n s ( w i d t h , h e i g h t ) ; i m a g e W i d t h = w i d t h ; i m a g e H e i g h t = h e i g h t ; i f ( ( ( p p _ c o n t a i n e r W i d t h > w i n d o w W i d t h ) | | ( p p _ c o n t a i n e r H e i g h t > w i n d o w H e i g h t ) ) & & d o r e s i z e & & s e t t i n g s . a l l o w r e s i z e & & ! p e r c e n t B a s e d ) { h a s B e e n R e s i z e d = t r u e ; n o t F i t t i n g = t r u e ; w h i l e ( n o t F i t t i n g ) { i f ( ( p p _ c o n t a i n e r W i d t h > w i n d o w W i d t h ) ) { i m a g e W i d t h = ( w i n d o w W i d t h - 2 0 0 ) ; i m a g e H e i g h t = ( h e i g h t / w i d t h ) * i m a g e W i d t h ; } e l s e   i f ( ( p p _ c o n t a i n e r H e i g h t > w i n d o w H e i g h t ) ) { i m a g e H e i g h t = ( w i n d o w H e i g h t - 2 0 0 ) ; i m a g e W i d t h = ( w i d t h / h e i g h t ) * i m a g e H e i g h t ; } e l s e { n o t F i t t i n g = f a l s e ; } ; p p _ c o n t a i n e r H e i g h t = i m a g e H e i g h t ; p p _ c o n t a i n e r W i d t h = i m a g e W i d t h ; } ; _ g e t D i m e n s i o n s ( i m a g e W i d t h , i m a g e H e i g h t ) ; } ; r e t u r n { w i d t h : M a t h . f l o o r ( i m a g e W i d t h ) , h e i g h t : M a t h . f l o o r ( i m a g e H e i g h t ) , c o n t a i n e r H e i g h t : M a t h . f l o o r ( p p _ c o n t a i n e r H e i g h t ) , c o n t a i n e r W i d t h : M a t h . f l o o r ( p p _ c o n t a i n e r W i d t h ) + 4 0 , c o n t e n t H e i g h t : M a t h . f l o o r ( p p _ c o n t e n t H e i g h t ) , c o n t e n t W i d t h : M a t h . f l o o r ( p p _ c o n t e n t W i d t h ) , r e s i z e d : h a s B e e n R e s i z e d } ; } ; f u n c t i o n   _ g e t D i m e n s i o n s ( w i d t h , h e i g h t ) { w i d t h = p a r s e F l o a t ( w i d t h ) ; h e i g h t = p a r s e F l o a t ( h e i g h t ) ; $ p p _ d e t a i l s = $ p p _ p i c _ h o l d e r . f i n d ( ' . p p _ d e t a i l s ' ) ; $ p p _ d e t a i l s . w i d t h ( w i d t h ) ; d e t a i l s H e i g h t = p a r s e F l o a t ( $ p p _ d e t a i l s . c s s ( ' m a r g i n T o p ' ) ) + p a r s e F l o a t ( $ p p _ d e t a i l s . c s s ( ' m a r g i n B o t t o m ' ) ) ; $ p p _ d e t a i l s = $ p p _ d e t a i l s . c l o n e ( ) . a p p e n d T o ( $ ( ' b o d y ' ) ) . c s s ( { ' p o s i t i o n ' : ' a b s o l u t e ' , ' t o p ' : - 1 0 0 0 0 } ) ; d e t a i l s H e i g h t + = $ p p _ d e t a i l s . h e i g h t ( ) ; d e t a i l s H e i g h t = ( d e t a i l s H e i g h t < = 3 4 ) ? 3 6 : d e t a i l s H e i g h t ; i f ( $ . b r o w s e r . m s i e & & $ . b r o w s e r . v e r s i o n = = 7 ) d e t a i l s H e i g h t + = 8 ; $ p p _ d e t a i l s . r e m o v e ( ) ; p p _ c o n t e n t H e i g h t = h e i g h t + d e t a i l s H e i g h t ; p p _ c o n t e n t W i d t h = w i d t h ; p p _ c o n t a i n e r H e i g h t = p p _ c o n t e n t H e i g h t + $ p p t . h e i g h t ( ) + $ p p _ p i c _ h o l d e r . f i n d ( ' . p p _ t o p ' ) . h e i g h t ( ) + $ p p _ p i c _ h o l d e r . f i n d ( ' . p p _ b o t t o m ' ) . h e i g h t ( ) ; p p _ c o n t a i n e r W i d t h = w i d t h ; }  
 f u n c t i o n   _ g e t F i l e T y p e ( i t e m S r c ) { i f ( i t e m S r c . m a t c h ( / y o u t u b e \ . c o m \ / w a t c h / i ) ) { r e t u r n ' y o u t u b e ' ; } e l s e   i f ( i t e m S r c . m a t c h ( / v i m e o \ . c o m / i ) ) { r e t u r n ' v i m e o ' ; } e l s e   i f ( i t e m S r c . i n d e x O f ( ' . m o v ' ) ! = - 1 ) { r e t u r n ' q u i c k t i m e ' ; } e l s e   i f ( i t e m S r c . i n d e x O f ( ' . s w f ' ) ! = - 1 ) { r e t u r n ' f l a s h ' ; } e l s e   i f ( i t e m S r c . i n d e x O f ( ' i f r a m e ' ) ! = - 1 ) { r e t u r n ' i f r a m e ' } e l s e   i f ( i t e m S r c . s u b s t r ( 0 , 1 ) = = ' # ' ) { r e t u r n ' i n l i n e ' ; } e l s e { r e t u r n ' i m a g e ' ; } ; } ; f u n c t i o n   _ c e n t e r O v e r l a y ( ) { i f ( d o r e s i z e ) { t i t l e H e i g h t = $ p p t . h e i g h t ( ) ; c o n t e n t H e i g h t = $ p p _ p i c _ h o l d e r . h e i g h t ( ) ; c o n t e n t w i d t h = $ p p _ p i c _ h o l d e r . w i d t h ( ) ; p r o j e c t e d T o p = ( w i n d o w H e i g h t / 2 ) + s c r o l l P o s [ ' s c r o l l T o p ' ] - ( ( c o n t e n t H e i g h t + t i t l e H e i g h t ) / 2 ) ; $ p p _ p i c _ h o l d e r . c s s ( { ' t o p ' : p r o j e c t e d T o p , ' l e f t ' : ( w i n d o w W i d t h / 2 ) + s c r o l l P o s [ ' s c r o l l L e f t ' ] - ( c o n t e n t w i d t h / 2 ) } ) ; $ p p t . c s s ( { ' t o p ' : p r o j e c t e d T o p - t i t l e H e i g h t , ' l e f t ' : ( w i n d o w W i d t h / 2 ) + s c r o l l P o s [ ' s c r o l l L e f t ' ] - ( c o n t e n t w i d t h / 2 ) + 2 0 } ) ; } ; } ; f u n c t i o n   _ g e t S c r o l l ( ) { i f ( s e l f . p a g e Y O f f s e t ) { r e t u r n { s c r o l l T o p : s e l f . p a g e Y O f f s e t , s c r o l l L e f t : s e l f . p a g e X O f f s e t } ; } e l s e   i f ( d o c u m e n t . d o c u m e n t E l e m e n t & & d o c u m e n t . d o c u m e n t E l e m e n t . s c r o l l T o p ) { r e t u r n { s c r o l l T o p : d o c u m e n t . d o c u m e n t E l e m e n t . s c r o l l T o p , s c r o l l L e f t : d o c u m e n t . d o c u m e n t E l e m e n t . s c r o l l L e f t } ; } e l s e   i f ( d o c u m e n t . b o d y ) { r e t u r n { s c r o l l T o p : d o c u m e n t . b o d y . s c r o l l T o p , s c r o l l L e f t : d o c u m e n t . b o d y . s c r o l l L e f t } ; } ; } ; f u n c t i o n   _ r e s i z e O v e r l a y ( ) { w i n d o w H e i g h t = $ ( w i n d o w ) . h e i g h t ( ) ; w i n d o w W i d t h = $ ( w i n d o w ) . w i d t h ( ) ; $ p p _ o v e r l a y . c s s ( { ' h e i g h t ' : $ ( d o c u m e n t ) . h e i g h t ( ) } ) ; } ; f u n c t i o n   _ b u i l d O v e r l a y ( ) { $ ( ' b o d y ' ) . a p p e n d ( s e t t i n g s . m a r k u p ) ; $ p p _ p i c _ h o l d e r = $ ( ' . p p _ p i c _ h o l d e r ' ) ; $ p p t = $ ( ' . p p t ' ) ; $ p p _ o v e r l a y = $ ( ' d i v . p p _ o v e r l a y ' ) ; $ p p _ p i c _ h o l d e r . a t t r ( ' c l a s s ' , ' p p _ p i c _ h o l d e r   ' + s e t t i n g s . t h e m e ) ; $ p p _ o v e r l a y . c s s ( { ' o p a c i t y ' : 0 , ' h e i g h t ' : $ ( d o c u m e n t ) . h e i g h t ( ) } ) . b i n d ( ' c l i c k ' , f u n c t i o n ( ) { i f ( ! s e t t i n g s . m o d a l )  
 $ . p r e t t y P h o t o . c l o s e ( ) ; } ) ; $ ( ' a . p p _ c l o s e ' ) . b i n d ( ' c l i c k ' , f u n c t i o n ( ) { $ . p r e t t y P h o t o . c l o s e ( ) ; r e t u r n   f a l s e ; } ) ; $ ( ' a . p p _ e x p a n d ' ) . b i n d ( ' c l i c k ' , f u n c t i o n ( ) { $ t h i s = $ ( t h i s ) ; i f ( $ t h i s . h a s C l a s s ( ' p p _ e x p a n d ' ) ) { $ t h i s . r e m o v e C l a s s ( ' p p _ e x p a n d ' ) . a d d C l a s s ( ' p p _ c o n t r a c t ' ) ; d o r e s i z e = f a l s e ; } e l s e { $ t h i s . r e m o v e C l a s s ( ' p p _ c o n t r a c t ' ) . a d d C l a s s ( ' p p _ e x p a n d ' ) ; d o r e s i z e = t r u e ; } ; _ h i d e C o n t e n t ( f u n c t i o n ( ) { $ . p r e t t y P h o t o . o p e n ( i m a g e s , t i t l e s , d e s c r i p t i o n s ) } ) ; $ p p _ p i c _ h o l d e r . f i n d ( ' . p p _ f a d e ' ) . f a d e O u t ( s e t t i n g s . a n i m a t i o n S p e e d ) ; r e t u r n   f a l s e ; } ) ; $ p p _ p i c _ h o l d e r . f i n d ( ' . p p _ p r e v i o u s ,   . p p _ a r r o w _ p r e v i o u s ' ) . b i n d ( ' c l i c k ' , f u n c t i o n ( ) { $ . p r e t t y P h o t o . c h a n g e P a g e ( ' p r e v i o u s ' ) ; r e t u r n   f a l s e ; } ) ; $ p p _ p i c _ h o l d e r . f i n d ( ' . p p _ n e x t ,   . p p _ a r r o w _ n e x t ' ) . b i n d ( ' c l i c k ' , f u n c t i o n ( ) { $ . p r e t t y P h o t o . c h a n g e P a g e ( ' n e x t ' ) ; r e t u r n   f a l s e ; } ) ; } ; _ c e n t e r O v e r l a y ( ) ; } ; f u n c t i o n   g r a b _ p a r a m ( n a m e , u r l ) { n a m e = n a m e . r e p l a c e ( / [ \ [ ] / , " \ \ \ [ " ) . r e p l a c e ( / [ \ ] ] / , " \ \ \ ] " ) ; v a r   r e g e x S = " [ \ \ ? & ] " + n a m e + " = ( [ ^ & # ] * ) " ; v a r   r e g e x = n e w   R e g E x p ( r e g e x S ) ; v a r   r e s u l t s = r e g e x . e x e c ( u r l ) ; i f ( r e s u l t s = = n u l l )  
 r e t u r n " " ; e l s e  
 r e t u r n   r e s u l t s [ 1 ] ; } } ) ( j Q u e r y ) ;  
  
  
 / *  
   *   j Q u e r y   U I   E f f e c t s   1 . 8 . 1  
   *  
   *   C o p y r i g h t   ( c )   2 0 1 0   A U T H O R S . t x t   ( h t t p : / / j q u e r y u i . c o m / a b o u t )  
   *   D u a l   l i c e n s e d   u n d e r   t h e   M I T   ( M I T - L I C E N S E . t x t )  
   *   a n d   G P L   ( G P L - L I C E N S E . t x t )   l i c e n s e s .  
   *  
   *   h t t p : / / d o c s . j q u e r y . c o m / U I / E f f e c t s /  
   * /  
 j Q u e r y . e f f e c t s | | f u n c t i o n ( f ) { f u n c t i o n   k ( c ) { v a r   a ; i f ( c & & c . c o n s t r u c t o r = = A r r a y & & c . l e n g t h = = 3 ) r e t u r n   c ; i f ( a = / r g b \ ( \ s * ( [ 0 - 9 ] { 1 , 3 } ) \ s * , \ s * ( [ 0 - 9 ] { 1 , 3 } ) \ s * , \ s * ( [ 0 - 9 ] { 1 , 3 } ) \ s * \ ) / . e x e c ( c ) ) r e t u r n [ p a r s e I n t ( a [ 1 ] , 1 0 ) , p a r s e I n t ( a [ 2 ] , 1 0 ) , p a r s e I n t ( a [ 3 ] , 1 0 ) ] ; i f ( a = / r g b \ ( \ s * ( [ 0 - 9 ] + ( ? : \ . [ 0 - 9 ] + ) ? ) \ % \ s * , \ s * ( [ 0 - 9 ] + ( ? : \ . [ 0 - 9 ] + ) ? ) \ % \ s * , \ s * ( [ 0 - 9 ] + ( ? : \ . [ 0 - 9 ] + ) ? ) \ % \ s * \ ) / . e x e c ( c ) ) r e t u r n [ p a r s e F l o a t ( a [ 1 ] ) * 2 . 5 5 , p a r s e F l o a t ( a [ 2 ] ) * 2 . 5 5 , p a r s e F l o a t ( a [ 3 ] ) * 2 . 5 5 ] ; i f ( a = / # ( [ a - f A - F 0 - 9 ] { 2 } ) ( [ a - f A - F 0 - 9 ] { 2 } ) ( [ a - f A - F 0 - 9 ] { 2 } ) / . e x e c ( c ) ) r e t u r n [ p a r s e I n t ( a [ 1 ] ,  
 1 6 ) , p a r s e I n t ( a [ 2 ] , 1 6 ) , p a r s e I n t ( a [ 3 ] , 1 6 ) ] ; i f ( a = / # ( [ a - f A - F 0 - 9 ] ) ( [ a - f A - F 0 - 9 ] ) ( [ a - f A - F 0 - 9 ] ) / . e x e c ( c ) ) r e t u r n [ p a r s e I n t ( a [ 1 ] + a [ 1 ] , 1 6 ) , p a r s e I n t ( a [ 2 ] + a [ 2 ] , 1 6 ) , p a r s e I n t ( a [ 3 ] + a [ 3 ] , 1 6 ) ] ; i f ( / r g b a \ ( 0 ,   0 ,   0 ,   0 \ ) / . e x e c ( c ) ) r e t u r n   l . t r a n s p a r e n t ; r e t u r n   l [ f . t r i m ( c ) . t o L o w e r C a s e ( ) ] } f u n c t i o n   q ( c , a ) { v a r   b ; d o { b = f . c u r C S S ( c , a ) ; i f ( b ! = " " & & b ! = " t r a n s p a r e n t " | | f . n o d e N a m e ( c , " b o d y " ) ) b r e a k ; a = " b a c k g r o u n d C o l o r " } w h i l e ( c = c . p a r e n t N o d e ) ; r e t u r n   k ( b ) } f u n c t i o n   m ( ) { v a r   c = d o c u m e n t . d e f a u l t V i e w ? d o c u m e n t . d e f a u l t V i e w . g e t C o m p u t e d S t y l e ( t h i s , n u l l ) : t h i s . c u r r e n t S t y l e ,  
 a = { } , b , d ; i f ( c & & c . l e n g t h & & c [ 0 ] & & c [ c [ 0 ] ] ) f o r ( v a r   e = c . l e n g t h ; e - - ; ) { b = c [ e ] ; i f ( t y p e o f   c [ b ] = = " s t r i n g " ) { d = b . r e p l a c e ( / \ - ( \ w ) / g , f u n c t i o n ( g , h ) { r e t u r n   h . t o U p p e r C a s e ( ) } ) ; a [ d ] = c [ b ] } } e l s e   f o r ( b   i n   c ) i f ( t y p e o f   c [ b ] = = = " s t r i n g " ) a [ b ] = c [ b ] ; r e t u r n   a } f u n c t i o n   n ( c ) { v a r   a , b ; f o r ( a   i n   c ) { b = c [ a ] ; i f ( b = = n u l l | | f . i s F u n c t i o n ( b ) | | a   i n   r | | / s c r o l l b a r / . t e s t ( a ) | | ! / c o l o r / i . t e s t ( a ) & & i s N a N ( p a r s e F l o a t ( b ) ) ) d e l e t e   c [ a ] } r e t u r n   c } f u n c t i o n   s ( c , a ) { v a r   b = { _ : 0 } , d ; f o r ( d   i n   a ) i f ( c [ d ] ! = a [ d ] ) b [ d ] = a [ d ] ; r e t u r n   b } f u n c t i o n   j ( c , a , b , d ) { i f ( t y p e o f   c = = " o b j e c t " ) { d =  
 a ; b = n u l l ; a = c ; c = a . e f f e c t } i f ( f . i s F u n c t i o n ( a ) ) { d = a ; b = n u l l ; a = { } } i f ( f . i s F u n c t i o n ( b ) ) { d = b ; b = n u l l } i f ( t y p e o f   a = = " n u m b e r " | | f . f x . s p e e d s [ a ] ) { d = b ; b = a ; a = { } } a = a | | { } ; b = b | | a . d u r a t i o n ; b = f . f x . o f f ? 0 : t y p e o f   b = = " n u m b e r " ? b : f . f x . s p e e d s [ b ] | | f . f x . s p e e d s . _ d e f a u l t ; d = d | | a . c o m p l e t e ; r e t u r n [ c , a , b , d ] } f . e f f e c t s = { } ; f . e a c h ( [ " b a c k g r o u n d C o l o r " , " b o r d e r B o t t o m C o l o r " , " b o r d e r L e f t C o l o r " , " b o r d e r R i g h t C o l o r " , " b o r d e r T o p C o l o r " , " c o l o r " , " o u t l i n e C o l o r " ] , f u n c t i o n ( c , a ) { f . f x . s t e p [ a ] = f u n c t i o n ( b ) { i f ( ! b . c o l o r I n i t ) { b . s t a r t = q ( b . e l e m , a ) ; b . e n d = k ( b . e n d ) ; b . c o l o r I n i t =  
 t r u e } b . e l e m . s t y l e [ a ] = " r g b ( " + M a t h . m a x ( M a t h . m i n ( p a r s e I n t ( b . p o s * ( b . e n d [ 0 ] - b . s t a r t [ 0 ] ) + b . s t a r t [ 0 ] , 1 0 ) , 2 5 5 ) , 0 ) + " , " + M a t h . m a x ( M a t h . m i n ( p a r s e I n t ( b . p o s * ( b . e n d [ 1 ] - b . s t a r t [ 1 ] ) + b . s t a r t [ 1 ] , 1 0 ) , 2 5 5 ) , 0 ) + " , " + M a t h . m a x ( M a t h . m i n ( p a r s e I n t ( b . p o s * ( b . e n d [ 2 ] - b . s t a r t [ 2 ] ) + b . s t a r t [ 2 ] , 1 0 ) , 2 5 5 ) , 0 ) + " ) " } } ) ; v a r   l = { a q u a : [ 0 , 2 5 5 , 2 5 5 ] , a z u r e : [ 2 4 0 , 2 5 5 , 2 5 5 ] , b e i g e : [ 2 4 5 , 2 4 5 , 2 2 0 ] , b l a c k : [ 0 , 0 , 0 ] , b l u e : [ 0 , 0 , 2 5 5 ] , b r o w n : [ 1 6 5 , 4 2 , 4 2 ] , c y a n : [ 0 , 2 5 5 , 2 5 5 ] , d a r k b l u e : [ 0 , 0 , 1 3 9 ] , d a r k c y a n : [ 0 , 1 3 9 , 1 3 9 ] , d a r k g r e y : [ 1 6 9 , 1 6 9 , 1 6 9 ] , d a r k g r e e n : [ 0 , 1 0 0 , 0 ] , d a r k k h a k i : [ 1 8 9 ,  
 1 8 3 , 1 0 7 ] , d a r k m a g e n t a : [ 1 3 9 , 0 , 1 3 9 ] , d a r k o l i v e g r e e n : [ 8 5 , 1 0 7 , 4 7 ] , d a r k o r a n g e : [ 2 5 5 , 1 4 0 , 0 ] , d a r k o r c h i d : [ 1 5 3 , 5 0 , 2 0 4 ] , d a r k r e d : [ 1 3 9 , 0 , 0 ] , d a r k s a l m o n : [ 2 3 3 , 1 5 0 , 1 2 2 ] , d a r k v i o l e t : [ 1 4 8 , 0 , 2 1 1 ] , f u c h s i a : [ 2 5 5 , 0 , 2 5 5 ] , g o l d : [ 2 5 5 , 2 1 5 , 0 ] , g r e e n : [ 0 , 1 2 8 , 0 ] , i n d i g o : [ 7 5 , 0 , 1 3 0 ] , k h a k i : [ 2 4 0 , 2 3 0 , 1 4 0 ] , l i g h t b l u e : [ 1 7 3 , 2 1 6 , 2 3 0 ] , l i g h t c y a n : [ 2 2 4 , 2 5 5 , 2 5 5 ] , l i g h t g r e e n : [ 1 4 4 , 2 3 8 , 1 4 4 ] , l i g h t g r e y : [ 2 1 1 , 2 1 1 , 2 1 1 ] , l i g h t p i n k : [ 2 5 5 , 1 8 2 , 1 9 3 ] , l i g h t y e l l o w : [ 2 5 5 , 2 5 5 , 2 2 4 ] , l i m e : [ 0 , 2 5 5 , 0 ] , m a g e n t a : [ 2 5 5 , 0 , 2 5 5 ] , m a r o o n : [ 1 2 8 , 0 , 0 ] , n a v y : [ 0 , 0 , 1 2 8 ] , o l i v e : [ 1 2 8 , 1 2 8 , 0 ] , o r a n g e : [ 2 5 5 ,  
 1 6 5 , 0 ] , p i n k : [ 2 5 5 , 1 9 2 , 2 0 3 ] , p u r p l e : [ 1 2 8 , 0 , 1 2 8 ] , v i o l e t : [ 1 2 8 , 0 , 1 2 8 ] , r e d : [ 2 5 5 , 0 , 0 ] , s i l v e r : [ 1 9 2 , 1 9 2 , 1 9 2 ] , w h i t e : [ 2 5 5 , 2 5 5 , 2 5 5 ] , y e l l o w : [ 2 5 5 , 2 5 5 , 0 ] , t r a n s p a r e n t : [ 2 5 5 , 2 5 5 , 2 5 5 ] } , o = [ " a d d " , " r e m o v e " , " t o g g l e " ] , r = { b o r d e r : 1 , b o r d e r B o t t o m : 1 , b o r d e r C o l o r : 1 , b o r d e r L e f t : 1 , b o r d e r R i g h t : 1 , b o r d e r T o p : 1 , b o r d e r W i d t h : 1 , m a r g i n : 1 , p a d d i n g : 1 } ; f . e f f e c t s . a n i m a t e C l a s s = f u n c t i o n ( c , a , b , d ) { i f ( f . i s F u n c t i o n ( b ) ) { d = b ; b = n u l l } r e t u r n   t h i s . e a c h ( f u n c t i o n ( ) { v a r   e = f ( t h i s ) , g = e . a t t r ( " s t y l e " ) | | "   " , h = n ( m . c a l l ( t h i s ) ) , p , t = e . a t t r ( " c l a s s N a m e " ) ; f . e a c h ( o , f u n c t i o n ( u ,  
 i ) { c [ i ] & & e [ i + " C l a s s " ] ( c [ i ] ) } ) ; p = n ( m . c a l l ( t h i s ) ) ; e . a t t r ( " c l a s s N a m e " , t ) ; e . a n i m a t e ( s ( h , p ) , a , b , f u n c t i o n ( ) { f . e a c h ( o , f u n c t i o n ( u , i ) { c [ i ] & & e [ i + " C l a s s " ] ( c [ i ] ) } ) ; i f ( t y p e o f   e . a t t r ( " s t y l e " ) = = " o b j e c t " ) { e . a t t r ( " s t y l e " ) . c s s T e x t = " " ; e . a t t r ( " s t y l e " ) . c s s T e x t = g } e l s e   e . a t t r ( " s t y l e " , g ) ; d & & d . a p p l y ( t h i s , a r g u m e n t s ) } ) } ) } ; f . f n . e x t e n d ( { _ a d d C l a s s : f . f n . a d d C l a s s , a d d C l a s s : f u n c t i o n ( c , a , b , d ) { r e t u r n   a ? f . e f f e c t s . a n i m a t e C l a s s . a p p l y ( t h i s , [ { a d d : c } , a , b , d ] ) : t h i s . _ a d d C l a s s ( c ) } , _ r e m o v e C l a s s : f . f n . r e m o v e C l a s s , r e m o v e C l a s s : f u n c t i o n ( c , a , b , d ) { r e t u r n   a ?  
 f . e f f e c t s . a n i m a t e C l a s s . a p p l y ( t h i s , [ { r e m o v e : c } , a , b , d ] ) : t h i s . _ r e m o v e C l a s s ( c ) } , _ t o g g l e C l a s s : f . f n . t o g g l e C l a s s , t o g g l e C l a s s : f u n c t i o n ( c , a , b , d , e ) { r e t u r n   t y p e o f   a = = " b o o l e a n " | | a = = = u n d e f i n e d ? b ? f . e f f e c t s . a n i m a t e C l a s s . a p p l y ( t h i s , [ a ? { a d d : c } : { r e m o v e : c } , b , d , e ] ) : t h i s . _ t o g g l e C l a s s ( c , a ) : f . e f f e c t s . a n i m a t e C l a s s . a p p l y ( t h i s , [ { t o g g l e : c } , a , b , d ] ) } , s w i t c h C l a s s : f u n c t i o n ( c , a , b , d , e ) { r e t u r n   f . e f f e c t s . a n i m a t e C l a s s . a p p l y ( t h i s , [ { a d d : a , r e m o v e : c } , b , d , e ] ) } } ) ; f . e x t e n d ( f . e f f e c t s , { v e r s i o n : " 1 . 8 . 1 " , s a v e : f u n c t i o n ( c , a ) { f o r ( v a r   b = 0 ; b < a . l e n g t h ; b + + ) a [ b ] ! = =  
 n u l l & & c . d a t a ( " e c . s t o r a g e . " + a [ b ] , c [ 0 ] . s t y l e [ a [ b ] ] ) } , r e s t o r e : f u n c t i o n ( c , a ) { f o r ( v a r   b = 0 ; b < a . l e n g t h ; b + + ) a [ b ] ! = = n u l l & & c . c s s ( a [ b ] , c . d a t a ( " e c . s t o r a g e . " + a [ b ] ) ) } , s e t M o d e : f u n c t i o n ( c , a ) { i f ( a = = " t o g g l e " ) a = c . i s ( " : h i d d e n " ) ? " s h o w " : " h i d e " ; r e t u r n   a } , g e t B a s e l i n e : f u n c t i o n ( c , a ) { v a r   b ; s w i t c h ( c [ 0 ] ) { c a s e   " t o p " : b = 0 ; b r e a k ; c a s e   " m i d d l e " : b = 0 . 5 ; b r e a k ; c a s e   " b o t t o m " : b = 1 ; b r e a k ; d e f a u l t : b = c [ 0 ] / a . h e i g h t } s w i t c h ( c [ 1 ] ) { c a s e   " l e f t " : c = 0 ; b r e a k ; c a s e   " c e n t e r " : c = 0 . 5 ; b r e a k ; c a s e   " r i g h t " : c = 1 ; b r e a k ; d e f a u l t : c = c [ 1 ] / a . w i d t h } r e t u r n { x : c , y : b } } , c r e a t e W r a p p e r : f u n c t i o n ( c ) { i f ( c . p a r e n t ( ) . i s ( " . u i - e f f e c t s - w r a p p e r " ) ) r e t u r n   c . p a r e n t ( ) ;  
 v a r   a = { w i d t h : c . o u t e r W i d t h ( t r u e ) , h e i g h t : c . o u t e r H e i g h t ( t r u e ) , " f l o a t " : c . c s s ( " f l o a t " ) } , b = f ( " < d i v > < / d i v > " ) . a d d C l a s s ( " u i - e f f e c t s - w r a p p e r " ) . c s s ( { f o n t S i z e : " 1 0 0 % " , b a c k g r o u n d : " t r a n s p a r e n t " , b o r d e r : " n o n e " , m a r g i n : 0 , p a d d i n g : 0 } ) ; c . w r a p ( b ) ; b = c . p a r e n t ( ) ; i f ( c . c s s ( " p o s i t i o n " ) = = " s t a t i c " ) { b . c s s ( { p o s i t i o n : " r e l a t i v e " } ) ; c . c s s ( { p o s i t i o n : " r e l a t i v e " } ) } e l s e { f . e x t e n d ( a , { p o s i t i o n : c . c s s ( " p o s i t i o n " ) , z I n d e x : c . c s s ( " z - i n d e x " ) } ) ; f . e a c h ( [ " t o p " , " l e f t " , " b o t t o m " , " r i g h t " ] , f u n c t i o n ( d , e ) { a [ e ] = c . c s s ( e ) ; i f ( i s N a N ( p a r s e I n t ( a [ e ] , 1 0 ) ) ) a [ e ] = " a u t o " } ) ;  
 c . c s s ( { p o s i t i o n : " r e l a t i v e " , t o p : 0 , l e f t : 0 } ) } r e t u r n   b . c s s ( a ) . s h o w ( ) } , r e m o v e W r a p p e r : f u n c t i o n ( c ) { i f ( c . p a r e n t ( ) . i s ( " . u i - e f f e c t s - w r a p p e r " ) ) r e t u r n   c . p a r e n t ( ) . r e p l a c e W i t h ( c ) ; r e t u r n   c } , s e t T r a n s i t i o n : f u n c t i o n ( c , a , b , d ) { d = d | | { } ; f . e a c h ( a , f u n c t i o n ( e , g ) { u n i t = c . c s s U n i t ( g ) ; i f ( u n i t [ 0 ] > 0 ) d [ g ] = u n i t [ 0 ] * b + u n i t [ 1 ] } ) ; r e t u r n   d } } ) ; f . f n . e x t e n d ( { e f f e c t : f u n c t i o n ( c ) { v a r   a = j . a p p l y ( t h i s , a r g u m e n t s ) ; a = { o p t i o n s : a [ 1 ] , d u r a t i o n : a [ 2 ] , c a l l b a c k : a [ 3 ] } ; v a r   b = f . e f f e c t s [ c ] ; r e t u r n   b & & ! f . f x . o f f ? b . c a l l ( t h i s , a ) : t h i s } , _ s h o w : f . f n . s h o w , s h o w : f u n c t i o n ( c ) { i f ( ! c | |  
 t y p e o f   c = = " n u m b e r " | | f . f x . s p e e d s [ c ] ) r e t u r n   t h i s . _ s h o w . a p p l y ( t h i s , a r g u m e n t s ) ; e l s e { v a r   a = j . a p p l y ( t h i s , a r g u m e n t s ) ; a [ 1 ] . m o d e = " s h o w " ; r e t u r n   t h i s . e f f e c t . a p p l y ( t h i s , a ) } } , _ h i d e : f . f n . h i d e , h i d e : f u n c t i o n ( c ) { i f ( ! c | | t y p e o f   c = = " n u m b e r " | | f . f x . s p e e d s [ c ] ) r e t u r n   t h i s . _ h i d e . a p p l y ( t h i s , a r g u m e n t s ) ; e l s e { v a r   a = j . a p p l y ( t h i s , a r g u m e n t s ) ; a [ 1 ] . m o d e = " h i d e " ; r e t u r n   t h i s . e f f e c t . a p p l y ( t h i s , a ) } } , _ _ t o g g l e : f . f n . t o g g l e , t o g g l e : f u n c t i o n ( c ) { i f ( ! c | | t y p e o f   c = = " n u m b e r " | | f . f x . s p e e d s [ c ] | | t y p e o f   c = = " b o o l e a n " | | f . i s F u n c t i o n ( c ) ) r e t u r n   t h i s . _ _ t o g g l e . a p p l y ( t h i s ,  
 a r g u m e n t s ) ; e l s e { v a r   a = j . a p p l y ( t h i s , a r g u m e n t s ) ; a [ 1 ] . m o d e = " t o g g l e " ; r e t u r n   t h i s . e f f e c t . a p p l y ( t h i s , a ) } } , c s s U n i t : f u n c t i o n ( c ) { v a r   a = t h i s . c s s ( c ) , b = [ ] ; f . e a c h ( [ " e m " , " p x " , " % " , " p t " ] , f u n c t i o n ( d , e ) { i f ( a . i n d e x O f ( e ) > 0 ) b = [ p a r s e F l o a t ( a ) , e ] } ) ; r e t u r n   b } } ) ; f . e a s i n g . j s w i n g = f . e a s i n g . s w i n g ; f . e x t e n d ( f . e a s i n g , { d e f : " e a s e O u t Q u a d " , s w i n g : f u n c t i o n ( c , a , b , d , e ) { r e t u r n   f . e a s i n g [ f . e a s i n g . d e f ] ( c , a , b , d , e ) } , e a s e I n Q u a d : f u n c t i o n ( c , a , b , d , e ) { r e t u r n   d * ( a / = e ) * a + b } , e a s e O u t Q u a d : f u n c t i o n ( c , a , b , d , e ) { r e t u r n - d * ( a / = e ) * ( a - 2 ) + b } , e a s e I n O u t Q u a d : f u n c t i o n ( c ,  
 a , b , d , e ) { i f ( ( a / = e / 2 ) < 1 ) r e t u r n   d / 2 * a * a + b ; r e t u r n - d / 2 * ( - - a * ( a - 2 ) - 1 ) + b } , e a s e I n C u b i c : f u n c t i o n ( c , a , b , d , e ) { r e t u r n   d * ( a / = e ) * a * a + b } , e a s e O u t C u b i c : f u n c t i o n ( c , a , b , d , e ) { r e t u r n   d * ( ( a = a / e - 1 ) * a * a + 1 ) + b } , e a s e I n O u t C u b i c : f u n c t i o n ( c , a , b , d , e ) { i f ( ( a / = e / 2 ) < 1 ) r e t u r n   d / 2 * a * a * a + b ; r e t u r n   d / 2 * ( ( a - = 2 ) * a * a + 2 ) + b } , e a s e I n Q u a r t : f u n c t i o n ( c , a , b , d , e ) { r e t u r n   d * ( a / = e ) * a * a * a + b } , e a s e O u t Q u a r t : f u n c t i o n ( c , a , b , d , e ) { r e t u r n - d * ( ( a = a / e - 1 ) * a * a * a - 1 ) + b } , e a s e I n O u t Q u a r t : f u n c t i o n ( c , a , b , d , e ) { i f ( ( a / = e / 2 ) < 1 ) r e t u r n   d / 2 * a * a * a * a + b ; r e t u r n - d / 2 * ( ( a - = 2 ) * a * a * a - 2 ) +  
 b } , e a s e I n Q u i n t : f u n c t i o n ( c , a , b , d , e ) { r e t u r n   d * ( a / = e ) * a * a * a * a + b } , e a s e O u t Q u i n t : f u n c t i o n ( c , a , b , d , e ) { r e t u r n   d * ( ( a = a / e - 1 ) * a * a * a * a + 1 ) + b } , e a s e I n O u t Q u i n t : f u n c t i o n ( c , a , b , d , e ) { i f ( ( a / = e / 2 ) < 1 ) r e t u r n   d / 2 * a * a * a * a * a + b ; r e t u r n   d / 2 * ( ( a - = 2 ) * a * a * a * a + 2 ) + b } , e a s e I n S i n e : f u n c t i o n ( c , a , b , d , e ) { r e t u r n - d * M a t h . c o s ( a / e * ( M a t h . P I / 2 ) ) + d + b } , e a s e O u t S i n e : f u n c t i o n ( c , a , b , d , e ) { r e t u r n   d * M a t h . s i n ( a / e * ( M a t h . P I / 2 ) ) + b } , e a s e I n O u t S i n e : f u n c t i o n ( c , a , b , d , e ) { r e t u r n - d / 2 * ( M a t h . c o s ( M a t h . P I * a / e ) - 1 ) + b } , e a s e I n E x p o : f u n c t i o n ( c , a , b , d , e ) { r e t u r n   a = = 0 ? b : d * M a t h . p o w ( 2 ,  
 1 0 * ( a / e - 1 ) ) + b } , e a s e O u t E x p o : f u n c t i o n ( c , a , b , d , e ) { r e t u r n   a = = e ? b + d : d * ( - M a t h . p o w ( 2 , - 1 0 * a / e ) + 1 ) + b } , e a s e I n O u t E x p o : f u n c t i o n ( c , a , b , d , e ) { i f ( a = = 0 ) r e t u r n   b ; i f ( a = = e ) r e t u r n   b + d ; i f ( ( a / = e / 2 ) < 1 ) r e t u r n   d / 2 * M a t h . p o w ( 2 , 1 0 * ( a - 1 ) ) + b ; r e t u r n   d / 2 * ( - M a t h . p o w ( 2 , - 1 0 * - - a ) + 2 ) + b } , e a s e I n C i r c : f u n c t i o n ( c , a , b , d , e ) { r e t u r n - d * ( M a t h . s q r t ( 1 - ( a / = e ) * a ) - 1 ) + b } , e a s e O u t C i r c : f u n c t i o n ( c , a , b , d , e ) { r e t u r n   d * M a t h . s q r t ( 1 - ( a = a / e - 1 ) * a ) + b } , e a s e I n O u t C i r c : f u n c t i o n ( c , a , b , d , e ) { i f ( ( a / = e / 2 ) < 1 ) r e t u r n - d / 2 * ( M a t h . s q r t ( 1 - a * a ) - 1 ) + b ; r e t u r n   d / 2 * ( M a t h . s q r t ( 1 - ( a - = 2 ) *  
 a ) + 1 ) + b } , e a s e I n E l a s t i c : f u n c t i o n ( c , a , b , d , e ) { c = 1 . 7 0 1 5 8 ; v a r   g = 0 , h = d ; i f ( a = = 0 ) r e t u r n   b ; i f ( ( a / = e ) = = 1 ) r e t u r n   b + d ; g | | ( g = e * 0 . 3 ) ; i f ( h < M a t h . a b s ( d ) ) { h = d ; c = g / 4 } e l s e   c = g / ( 2 * M a t h . P I ) * M a t h . a s i n ( d / h ) ; r e t u r n - ( h * M a t h . p o w ( 2 , 1 0 * ( a - = 1 ) ) * M a t h . s i n ( ( a * e - c ) * 2 * M a t h . P I / g ) ) + b } , e a s e O u t E l a s t i c : f u n c t i o n ( c , a , b , d , e ) { c = 1 . 7 0 1 5 8 ; v a r   g = 0 , h = d ; i f ( a = = 0 ) r e t u r n   b ; i f ( ( a / = e ) = = 1 ) r e t u r n   b + d ; g | | ( g = e * 0 . 3 ) ; i f ( h < M a t h . a b s ( d ) ) { h = d ; c = g / 4 } e l s e   c = g / ( 2 * M a t h . P I ) * M a t h . a s i n ( d / h ) ; r e t u r n   h * M a t h . p o w ( 2 , - 1 0 * a ) * M a t h . s i n ( ( a * e - c ) * 2 * M a t h . P I / g ) + d + b } , e a s e I n O u t E l a s t i c : f u n c t i o n ( c ,  
 a , b , d , e ) { c = 1 . 7 0 1 5 8 ; v a r   g = 0 , h = d ; i f ( a = = 0 ) r e t u r n   b ; i f ( ( a / = e / 2 ) = = 2 ) r e t u r n   b + d ; g | | ( g = e * 0 . 3 * 1 . 5 ) ; i f ( h < M a t h . a b s ( d ) ) { h = d ; c = g / 4 } e l s e   c = g / ( 2 * M a t h . P I ) * M a t h . a s i n ( d / h ) ; i f ( a < 1 ) r e t u r n - 0 . 5 * h * M a t h . p o w ( 2 , 1 0 * ( a - = 1 ) ) * M a t h . s i n ( ( a * e - c ) * 2 * M a t h . P I / g ) + b ; r e t u r n   h * M a t h . p o w ( 2 , - 1 0 * ( a - = 1 ) ) * M a t h . s i n ( ( a * e - c ) * 2 * M a t h . P I / g ) * 0 . 5 + d + b } , e a s e I n B a c k : f u n c t i o n ( c , a , b , d , e , g ) { i f ( g = = u n d e f i n e d ) g = 1 . 7 0 1 5 8 ; r e t u r n   d * ( a / = e ) * a * ( ( g + 1 ) * a - g ) + b } , e a s e O u t B a c k : f u n c t i o n ( c , a , b , d , e , g ) { i f ( g = = u n d e f i n e d ) g = 1 . 7 0 1 5 8 ; r e t u r n   d * ( ( a = a / e - 1 ) * a * ( ( g + 1 ) * a + g ) + 1 ) + b } , e a s e I n O u t B a c k : f u n c t i o n ( c ,  
 a , b , d , e , g ) { i f ( g = = u n d e f i n e d ) g = 1 . 7 0 1 5 8 ; i f ( ( a / = e / 2 ) < 1 ) r e t u r n   d / 2 * a * a * ( ( ( g * = 1 . 5 2 5 ) + 1 ) * a - g ) + b ; r e t u r n   d / 2 * ( ( a - = 2 ) * a * ( ( ( g * = 1 . 5 2 5 ) + 1 ) * a + g ) + 2 ) + b } , e a s e I n B o u n c e : f u n c t i o n ( c , a , b , d , e ) { r e t u r n   d - f . e a s i n g . e a s e O u t B o u n c e ( c , e - a , 0 , d , e ) + b } , e a s e O u t B o u n c e : f u n c t i o n ( c , a , b , d , e ) { r e t u r n ( a / = e ) < 1 / 2 . 7 5 ? d * 7 . 5 6 2 5 * a * a + b : a < 2 / 2 . 7 5 ? d * ( 7 . 5 6 2 5 * ( a - = 1 . 5 / 2 . 7 5 ) * a + 0 . 7 5 ) + b : a < 2 . 5 / 2 . 7 5 ? d * ( 7 . 5 6 2 5 * ( a - = 2 . 2 5 / 2 . 7 5 ) * a + 0 . 9 3 7 5 ) + b : d * ( 7 . 5 6 2 5 * ( a - = 2 . 6 2 5 / 2 . 7 5 ) * a + 0 . 9 8 4 3 7 5 ) + b } , e a s e I n O u t B o u n c e : f u n c t i o n ( c , a , b , d , e ) { i f ( a < e / 2 ) r e t u r n   f . e a s i n g . e a s e I n B o u n c e ( c , a * 2 , 0 ,  
 d , e ) * 0 . 5 + b ; r e t u r n   f . e a s i n g . e a s e O u t B o u n c e ( c , a * 2 - e , 0 , d , e ) * 0 . 5 + d * 0 . 5 + b } } ) } ( j Q u e r y ) ;  
 ; / *  
   *   j Q u e r y   U I   E f f e c t s   B o u n c e   1 . 8 . 1  
   *  
   *   C o p y r i g h t   ( c )   2 0 1 0   A U T H O R S . t x t   ( h t t p : / / j q u e r y u i . c o m / a b o u t )  
   *   D u a l   l i c e n s e d   u n d e r   t h e   M I T   ( M I T - L I C E N S E . t x t )  
   *   a n d   G P L   ( G P L - L I C E N S E . t x t )   l i c e n s e s .  
   *  
   *   h t t p : / / d o c s . j q u e r y . c o m / U I / E f f e c t s / B o u n c e  
   *  
   *   D e p e n d s :  
   * 	 j q u e r y . e f f e c t s . c o r e . j s  
   * /  
 ( f u n c t i o n ( e ) { e . e f f e c t s . b o u n c e = f u n c t i o n ( b ) { r e t u r n   t h i s . q u e u e ( f u n c t i o n ( ) { v a r   a = e ( t h i s ) , l = [ " p o s i t i o n " , " t o p " , " l e f t " ] , h = e . e f f e c t s . s e t M o d e ( a , b . o p t i o n s . m o d e | | " e f f e c t " ) , d = b . o p t i o n s . d i r e c t i o n | | " u p " , c = b . o p t i o n s . d i s t a n c e | | 2 0 , m = b . o p t i o n s . t i m e s | | 5 , i = b . d u r a t i o n | | 2 5 0 ; / s h o w | h i d e / . t e s t ( h ) & & l . p u s h ( " o p a c i t y " ) ; e . e f f e c t s . s a v e ( a , l ) ; a . s h o w ( ) ; e . e f f e c t s . c r e a t e W r a p p e r ( a ) ; v a r   f = d = = " u p " | | d = = " d o w n " ? " t o p " : " l e f t " ; d = d = = " u p " | | d = = " l e f t " ? " p o s " : " n e g " ; c = b . o p t i o n s . d i s t a n c e | | ( f = = " t o p " ? a . o u t e r H e i g h t ( { m a r g i n : t r u e } ) / 3 : a . o u t e r W i d t h ( { m a r g i n : t r u e } ) /  
 3 ) ; i f ( h = = " s h o w " ) a . c s s ( " o p a c i t y " , 0 ) . c s s ( f , d = = " p o s " ? - c : c ) ; i f ( h = = " h i d e " ) c / = m * 2 ; h ! = " h i d e " & & m - - ; i f ( h = = " s h o w " ) { v a r   g = { o p a c i t y : 1 } ; g [ f ] = ( d = = " p o s " ? " + = " : " - = " ) + c ; a . a n i m a t e ( g , i / 2 , b . o p t i o n s . e a s i n g ) ; c / = 2 ; m - - } f o r ( g = 0 ; g < m ; g + + ) { v a r   j = { } , k = { } ; j [ f ] = ( d = = " p o s " ? " - = " : " + = " ) + c ; k [ f ] = ( d = = " p o s " ? " + = " : " - = " ) + c ; a . a n i m a t e ( j , i / 2 , b . o p t i o n s . e a s i n g ) . a n i m a t e ( k , i / 2 , b . o p t i o n s . e a s i n g ) ; c = h = = " h i d e " ? c * 2 : c / 2 } i f ( h = = " h i d e " ) { g = { o p a c i t y : 0 } ; g [ f ] = ( d = = " p o s " ? " - = " : " + = " ) + c ; a . a n i m a t e ( g , i / 2 , b . o p t i o n s . e a s i n g , f u n c t i o n ( ) { a . h i d e ( ) ; e . e f f e c t s . r e s t o r e ( a , l ) ; e . e f f e c t s . r e m o v e W r a p p e r ( a ) ;  
 b . c a l l b a c k & & b . c a l l b a c k . a p p l y ( t h i s , a r g u m e n t s ) } ) } e l s e { j = { } ; k = { } ; j [ f ] = ( d = = " p o s " ? " - = " : " + = " ) + c ; k [ f ] = ( d = = " p o s " ? " + = " : " - = " ) + c ; a . a n i m a t e ( j , i / 2 , b . o p t i o n s . e a s i n g ) . a n i m a t e ( k , i / 2 , b . o p t i o n s . e a s i n g , f u n c t i o n ( ) { e . e f f e c t s . r e s t o r e ( a , l ) ; e . e f f e c t s . r e m o v e W r a p p e r ( a ) ; b . c a l l b a c k & & b . c a l l b a c k . a p p l y ( t h i s , a r g u m e n t s ) } ) } a . q u e u e ( " f x " , f u n c t i o n ( ) { a . d e q u e u e ( ) } ) ; a . d e q u e u e ( ) } ) } } ) ( j Q u e r y ) ;  
 ;  
  
  
 / * *  
   *   C o o k i e   p l u g i n  
   *  
   *   C o p y r i g h t   ( c )   2 0 0 6   K l a u s   H a r t l   ( s t i l b u e r o . d e )  
   *   D u a l   l i c e n s e d   u n d e r   t h e   M I T   a n d   G P L   l i c e n s e s :  
   *   h t t p : / / w w w . o p e n s o u r c e . o r g / l i c e n s e s / m i t - l i c e n s e . p h p  
   *   h t t p : / / w w w . g n u . o r g / l i c e n s e s / g p l . h t m l  
   *  
   * /  
  
 / * *  
   *   C r e a t e   a   c o o k i e   w i t h   t h e   g i v e n   n a m e   a n d   v a l u e   a n d   o t h e r   o p t i o n a l   p a r a m e t e r s .  
   *  
   *   @ e x a m p l e   $ . c o o k i e ( ' t h e _ c o o k i e ' ,   ' t h e _ v a l u e ' ) ;  
   *   @ d e s c   S e t   t h e   v a l u e   o f   a   c o o k i e .  
   *   @ e x a m p l e   $ . c o o k i e ( ' t h e _ c o o k i e ' ,   ' t h e _ v a l u e ' ,   {   e x p i r e s :   7 ,   p a t h :   ' / ' ,   d o m a i n :   ' j q u e r y . c o m ' ,   s e c u r e :   t r u e   } ) ;  
   *   @ d e s c   C r e a t e   a   c o o k i e   w i t h   a l l   a v a i l a b l e   o p t i o n s .  
   *   @ e x a m p l e   $ . c o o k i e ( ' t h e _ c o o k i e ' ,   ' t h e _ v a l u e ' ) ;  
   *   @ d e s c   C r e a t e   a   s e s s i o n   c o o k i e .  
   *   @ e x a m p l e   $ . c o o k i e ( ' t h e _ c o o k i e ' ,   n u l l ) ;  
   *   @ d e s c   D e l e t e   a   c o o k i e   b y   p a s s i n g   n u l l   a s   v a l u e .   K e e p   i n   m i n d   t h a t   y o u   h a v e   t o   u s e   t h e   s a m e   p a t h   a n d   d o m a i n  
   *               u s e d   w h e n   t h e   c o o k i e   w a s   s e t .  
   *  
   *   @ p a r a m   S t r i n g   n a m e   T h e   n a m e   o f   t h e   c o o k i e .  
   *   @ p a r a m   S t r i n g   v a l u e   T h e   v a l u e   o f   t h e   c o o k i e .  
   *   @ p a r a m   O b j e c t   o p t i o n s   A n   o b j e c t   l i t e r a l   c o n t a i n i n g   k e y / v a l u e   p a i r s   t o   p r o v i d e   o p t i o n a l   c o o k i e   a t t r i b u t e s .  
   *   @ o p t i o n   N u m b e r | D a t e   e x p i r e s   E i t h e r   a n   i n t e g e r   s p e c i f y i n g   t h e   e x p i r a t i o n   d a t e   f r o m   n o w   o n   i n   d a y s   o r   a   D a t e   o b j e c t .  
   *                                                           I f   a   n e g a t i v e   v a l u e   i s   s p e c i f i e d   ( e . g .   a   d a t e   i n   t h e   p a s t ) ,   t h e   c o o k i e   w i l l   b e   d e l e t e d .  
   *                                                           I f   s e t   t o   n u l l   o r   o m i t t e d ,   t h e   c o o k i e   w i l l   b e   a   s e s s i o n   c o o k i e   a n d   w i l l   n o t   b e   r e t a i n e d  
   *                                                           w h e n   t h e   t h e   b r o w s e r   e x i t s .  
   *   @ o p t i o n   S t r i n g   p a t h   T h e   v a l u e   o f   t h e   p a t h   a t r i b u t e   o f   t h e   c o o k i e   ( d e f a u l t :   p a t h   o f   p a g e   t h a t   c r e a t e d   t h e   c o o k i e ) .  
   *   @ o p t i o n   S t r i n g   d o m a i n   T h e   v a l u e   o f   t h e   d o m a i n   a t t r i b u t e   o f   t h e   c o o k i e   ( d e f a u l t :   d o m a i n   o f   p a g e   t h a t   c r e a t e d   t h e   c o o k i e ) .  
   *   @ o p t i o n   B o o l e a n   s e c u r e   I f   t r u e ,   t h e   s e c u r e   a t t r i b u t e   o f   t h e   c o o k i e   w i l l   b e   s e t   a n d   t h e   c o o k i e   t r a n s m i s s i o n   w i l l  
   *                                                 r e q u i r e   a   s e c u r e   p r o t o c o l   ( l i k e   H T T P S ) .  
   *   @ t y p e   u n d e f i n e d  
   *  
   *   @ n a m e   $ . c o o k i e  
   *   @ c a t   P l u g i n s / C o o k i e  
   *   @ a u t h o r   K l a u s   H a r t l / k l a u s . h a r t l @ s t i l b u e r o . d e  
   * /  
  
 / * *  
   *   G e t   t h e   v a l u e   o f   a   c o o k i e   w i t h   t h e   g i v e n   n a m e .  
   *  
   *   @ e x a m p l e   $ . c o o k i e ( ' t h e _ c o o k i e ' ) ;  
   *   @ d e s c   G e t   t h e   v a l u e   o f   a   c o o k i e .  
   *  
   *   @ p a r a m   S t r i n g   n a m e   T h e   n a m e   o f   t h e   c o o k i e .  
   *   @ r e t u r n   T h e   v a l u e   o f   t h e   c o o k i e .  
   *   @ t y p e   S t r i n g  
   *  
   *   @ n a m e   $ . c o o k i e  
   *   @ c a t   P l u g i n s / C o o k i e  
   *   @ a u t h o r   K l a u s   H a r t l / k l a u s . h a r t l @ s t i l b u e r o . d e  
   * /  
 j Q u e r y . c o o k i e   =   f u n c t i o n ( n a m e ,   v a l u e ,   o p t i o n s )   {  
         i f   ( t y p e o f   v a l u e   ! =   ' u n d e f i n e d ' )   {   / /   n a m e   a n d   v a l u e   g i v e n ,   s e t   c o o k i e  
                 o p t i o n s   =   o p t i o n s   | |   { } ;  
                 i f   ( v a l u e   = = =   n u l l )   {  
                         v a l u e   =   ' ' ;  
                         o p t i o n s . e x p i r e s   =   - 1 ;  
                 }  
                 v a r   e x p i r e s   =   ' ' ;  
                 i f   ( o p t i o n s . e x p i r e s   & &   ( t y p e o f   o p t i o n s . e x p i r e s   = =   ' n u m b e r '   | |   o p t i o n s . e x p i r e s . t o U T C S t r i n g ) )   {  
                         v a r   d a t e ;  
                         i f   ( t y p e o f   o p t i o n s . e x p i r e s   = =   ' n u m b e r ' )   {  
                                 d a t e   =   n e w   D a t e ( ) ;  
                                 d a t e . s e t T i m e ( d a t e . g e t T i m e ( )   +   ( o p t i o n s . e x p i r e s   *   2 4   *   6 0   *   6 0   *   1 0 0 0 ) ) ;  
                         }   e l s e   {  
                                 d a t e   =   o p t i o n s . e x p i r e s ;  
                         }  
                         e x p i r e s   =   ' ;   e x p i r e s = '   +   d a t e . t o U T C S t r i n g ( ) ;   / /   u s e   e x p i r e s   a t t r i b u t e ,   m a x - a g e   i s   n o t   s u p p o r t e d   b y   I E  
                 }  
                 / /   C A U T I O N :   N e e d e d   t o   p a r e n t h e s i z e   o p t i o n s . p a t h   a n d   o p t i o n s . d o m a i n  
                 / /   i n   t h e   f o l l o w i n g   e x p r e s s i o n s ,   o t h e r w i s e   t h e y   e v a l u a t e   t o   u n d e f i n e d  
                 / /   i n   t h e   p a c k e d   v e r s i o n   f o r   s o m e   r e a s o n . . .  
                 v a r   p a t h   =   o p t i o n s . p a t h   ?   ' ;   p a t h = '   +   ( o p t i o n s . p a t h )   :   ' ' ;  
                 v a r   d o m a i n   =   o p t i o n s . d o m a i n   ?   ' ;   d o m a i n = '   +   ( o p t i o n s . d o m a i n )   :   ' ' ;  
                 v a r   s e c u r e   =   o p t i o n s . s e c u r e   ?   ' ;   s e c u r e '   :   ' ' ;  
                 d o c u m e n t . c o o k i e   =   [ n a m e ,   ' = ' ,   e n c o d e U R I C o m p o n e n t ( v a l u e ) ,   e x p i r e s ,   p a t h ,   d o m a i n ,   s e c u r e ] . j o i n ( ' ' ) ;  
         }   e l s e   {   / /   o n l y   n a m e   g i v e n ,   g e t   c o o k i e  
                 v a r   c o o k i e V a l u e   =   n u l l ;  
                 i f   ( d o c u m e n t . c o o k i e   & &   d o c u m e n t . c o o k i e   ! =   ' ' )   {  
                         v a r   c o o k i e s   =   d o c u m e n t . c o o k i e . s p l i t ( ' ; ' ) ;  
                         f o r   ( v a r   i   =   0 ;   i   <   c o o k i e s . l e n g t h ;   i + + )   {  
                                 v a r   c o o k i e   =   j Q u e r y . t r i m ( c o o k i e s [ i ] ) ;  
                                 / /   D o e s   t h i s   c o o k i e   s t r i n g   b e g i n   w i t h   t h e   n a m e   w e   w a n t ?  
                                 i f   ( c o o k i e . s u b s t r i n g ( 0 ,   n a m e . l e n g t h   +   1 )   = =   ( n a m e   +   ' = ' ) )   {  
                                         c o o k i e V a l u e   =   d e c o d e U R I C o m p o n e n t ( c o o k i e . s u b s t r i n g ( n a m e . l e n g t h   +   1 ) ) ;  
                                         b r e a k ;  
                                 }  
                         }  
                 }  
                 r e t u r n   c o o k i e V a l u e ;  
         }  
 } ;  
 