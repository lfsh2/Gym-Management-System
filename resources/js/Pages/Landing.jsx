import React from 'react';
import { Head } from '@inertiajs/react';

export default function Landing() {
  return (
    <>
      <Head title="Welcome to Our Gym!" />
      <div className="p-6">
        <h1 className="text-4xl font-bold">Get Fit With Us 💪</h1>
        <p className="mt-2 text-lg text-gray-600">Join today and transform your life!</p>
      </div>
    </>
  );
}
