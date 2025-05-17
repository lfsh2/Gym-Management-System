import React, { useEffect, useState } from 'react';
import { Head } from '@inertiajs/react';
import axios from 'axios';

const Members = () => {
  const [members, setMembers] = useState([]);
  const [form, setForm] = useState({ name: '', email: '', phone: '', address: '' });

  const fetchMembers = async () => {
    const res = await axios.get('/api/members');
    setMembers(res.data);
  };

  const handleSubmit = async (e) => {
    e.preventDefault();
    await axios.post('/api/members', form);
    setForm({ name: '', email: '', phone: '', address: '' });
    fetchMembers();
  };

  useEffect(() => {
    fetchMembers();
  }, []);

  return (
    <div className="p-6">
      <Head title="Members" />
      <h1 className="text-2xl font-bold mb-4">Gym Members</h1>

      <form onSubmit={handleSubmit} className="space-y-3 mb-6">
        <input className="border p-2 w-full" placeholder="Name" value={form.name} onChange={e => setForm({ ...form, name: e.target.value })} />
        <input className="border p-2 w-full" placeholder="Email" value={form.email} onChange={e => setForm({ ...form, email: e.target.value })} />
        <input className="border p-2 w-full" placeholder="Phone" value={form.phone} onChange={e => setForm({ ...form, phone: e.target.value })} />
        <input className="border p-2 w-full" placeholder="Address" value={form.address} onChange={e => setForm({ ...form, address: e.target.value })} />
        <button type="submit" className="bg-blue-600 text-white px-4 py-2">Add Member</button>
      </form>

      <ul>
        {members.map(member => (
          <li key={member.id} className="border-b py-2">
            {member.name} – {member.email}
          </li>
        ))}
      </ul>
    </div>
  );
};

export default Members;
