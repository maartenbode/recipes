import React from 'react';
import { Link, Head } from '@inertiajs/inertia-react';
import recipeImage from '../../../assets/Recipe_img.png'

const RecipeItem = ({title, course, duration}) => {
  return (
    <div className='py-4 px-10'>
      <div className='flex'>
        <div className='border'>
          <div className='flex flex-row py-2 px-2'>

            <div className='px-4'>
              <img src={recipeImage} className="w-16 h-12" />
            </div>

            <div className='flex flex-col'>
              <div className='px-2 font-bold'>
                {title}
              </div>
            
              <div className='flex flex-row'>
                <div className='px-2'>
                  {course}
                </div>
                <div className='px-2'>
                  {duration}
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  );
}

export default RecipeItem;